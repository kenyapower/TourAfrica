<?php

namespace App\Http\Controllers;

use Gathuku\Mpesa\Facades\Mpesa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Client;

class ClientController extends Controller
{

    public function ourFleet()
    {
        $vehicles = DB::table('vehicles')->paginate(1);
        return view('fleetlisting', compact('vehicles'));
    }

    public function Book(Request $request)
    {
        //genarate code for invoice
        $invoicenum = Str::random(6);
        //fetch form data
        $fname      = $request['fname'];
        $lname      = $request['lname'];
        $email      = $request['email'];
        $number     = $request['phone'];
        $day_booked = $request['daysbooked'];
        $location   = $request['location'];
        $destination= $request['destination'];
        $reg        = $request['v_reg'];
        $make       = $request['v_make'];
        $capacity   = $request['v_capacity'];
        $driver     = $request['v_driver'];
        $charges    = $request['v_charges'];
        $amount     = $day_booked * $charges;
        $invoice_status = "Open & Valid";
        $phoneprefix = substr($number, 0, 2);

//        dd($number, $phoneprefix);
        //message to send
        $verifyMessage = ("Dear $fname,\nThank You for Choosing TourAfrica.\nYou Paid for Invoice Number: $invoicenum.\nUse it on site to check validity");

        if($phoneprefix === '07' || $phoneprefix === '01') {
            $number = substr($number,1);
            $phoneNumber = '+254' . $number;

//            dd($number,$phoneNumber);
            //initialize stk push
            $AccountReference = 'Transaction#'.$invoicenum;
//            $registerUrlsResponse=Mpesa::c2bRegisterUrls();
//            $simulateResponse=Mpesa::simulateC2B($amount, '254708374149', 'Testing');
            $expressResponse=Mpesa::express($amount,'254795573597','TourAfrica',$AccountReference);

//            dd($expressResponse);
//            $expressResponse=Mpesa::express(100,'2547112855','24242524','Testing Payment');
            //initialize header
            $headerArray = array(
                'h_api_key' => '90a286404789e5fb761f0b7445c3907a24846eddd47060ff78f92bf8fa17f14b',
                'Content-Type' => 'application/json'
            );
            $client = new Client([
                'headers' => $headerArray
            ]);
            //body content
            $post = array(
                'sender_name' => 'UNICOMM',
                'service_id' => '0',
                'message' => $verifyMessage,
                'response_type' => 'json',
                'mobile' => $phoneNumber
            );
            //post body and hit sms api
            $r = $client->request('POST', 'https://api.mobitechtechnologies.com/sms/sendsms', [
                'body' => json_encode($post)
            ]);
            //get response
            $response = $r->getBody()->getContents();

            Log::info('request JSON [Sms Body]' . json_encode($response, true));
            //decode response and get values
            $responseJson = json_decode($response, true);
            $status = ($responseJson[0])['status_code'];
            $status_Descripition = ($responseJson[0])['status_desc'];

            Log::info('API status >>>>> ' . $status);
            Log::info('API Response Description >>>>> ' . $status_Descripition);

            //check response after message sending
            if ($status === '1000') {
                $msgStatus = 'Message Sent';
            } elseif ($status === '1001') {
                $msgStatus = 'Message Not Sent';
            } elseif ($status === '1003') {
                Alert::error('Sorry', 'Check Phone Number and try again!');
            }

            //save data to invoice_tbl
            $query = DB::table('invoices')->insert([
                'invoiceNumber' => $invoicenum,
                'c_fname' => $fname, 'c_lname' => $lname,
                'c_email' => $email, 'c_phone' => $phoneNumber,
                'c_location' => $location, 'day_booked' => $day_booked,
                'destination' => $destination, 'vehicle_reg' => $reg,
                'vehicle_make' => $make, 'vehicle_capacity' => $capacity,
                'vehicle_driver' => $driver, 'vehicle_rate' => $charges,
                'amountpaid' => $amount, 'invoicestatus' => $invoice_status,
                'created_at' => Carbon::now(), 'updated_at' => Carbon::now()

            ]);

            //check if insertion is successful
            if ($query) {
                DB::table('vehicles')->where('v_reg', $reg)
                    ->update([
                        'v_status' => "Booked"
                    ]);

                Alert::success('Success ', 'Booking in Progress, Check phone for payment And Messages for your Invoice Number');

            } else {
                Alert::error('Sorry', 'Booking Failed, Try again Later!');

            }
        }else{
            Alert::error('Sorry', 'Check Phone Number and try again!');
        }
        return back();

    }
}

