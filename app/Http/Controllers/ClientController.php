<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function ourFleet()
    {
        $vehicles = DB::table('vehicles')->paginate(1);
        return view('fleetlisting', compact('vehicles'));
    }

    public function Book(Request $request)
    {
//        dd($request);
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

        $verifyMessage = (" Dear $fname, Thank You for Choosing us. Your Invoice Number is : $invoicenum, Use it on site to check validity ");


        //message sending credentials
//        $api_key = config('smssending.api_key');
//        $senderId = config('smssending.sender_id');
//        $username = config('smssending.username');


        if ($number[0] === '0') {
            $number = substr($number, 1);
            $phoneNumber = '+'.'254' . $number;

//            dd($phoneNumber);

            $post = array(
                'sender_name'   => 'UNICOMM',
                'service_id'    => 0,
                'message'       => $verifyMessage,
                'response_type' => 'json',
                'mobile'        => $phoneNumber

            );

//            {
//                "mobile": "+254722158772",
//            "response_type": "json",
//            "sender_name": "MobiTech",
//            "service_id": 0,
//            "message": "This is a message.\n\nRegards\nMobiTech Technologies"
//            }
            $headerarray = array(
                'h_api_key' =>  '761f0b7445c3907a24846eddd47060ff78f92bf8fa17f14b',
                'Content-Type' => 'application/json'
            );


            Log::info('request JSON [REGISTER] SMS' . json_encode($post, true));

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.mobitechtechnologies.com/sms/sendsms');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headerarray);
//            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // execute!
            $response = curl_exec($ch);
            if (curl_exec($ch) === false) {
                Log::info('Curl Error SMS >>>>> ' . $response);
            }
            // close the connection, release resources used
            curl_close($ch);
            Log::info('API Response SMS >>>>> ' . $response);

            $responseJson = json_decode($response, true);
            $status = ($responseJson[0])['status_code'];
            $status_Descripition = ($responseJson[0])['status_desc'];

            Log::info('API status >>>>> ' . $status);
            Log::info('API Response Description >>>>> ' . $status_Descripition);

            //check response after message sending
            if ($status === '1000') {
                $msgStatus = 'Message Sent';
            }elseif($status === '1001'){
                $msgStatus = 'Message Not Sent';
            }

            //save data to invoice_tbl
            $query = DB::table('invoices')->insert([
                'invoiceNumber' => $invoicenum,
                'c_fname' => $fname,        'c_lname' => $lname,
                'c_email' => $email,        'c_phone' => $phoneNumber,
                'c_location' => $location,  'day_booked' => $day_booked,
                'destination' => $destination,'vehicle_reg' => $reg,
                'vehicle_make' => $make,     'vehicle_capacity' => $capacity,
                'vehicle_driver' => $driver, 'vehicle_rate' => $charges,
                'amountpaid' => $amount,     'invoicestatus' => $invoice_status,
                'created_at' => Carbon::now(), 'updated_at' => Carbon::now()

            ]);

//        check if insertion is successful
            if ($query) {
                DB::table('vehicles')->update([
                    'v_status' => "Booked"
                ]);
                Alert::success('Success ', 'Booking in Progress, Check phone for payment');

            } else {
                Alert::error('Sorry', 'Booking Failed, Try again Later!');

            }
        }
        return back();

    }
}

