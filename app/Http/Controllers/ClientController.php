<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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
        $phone      = $request['phone'];
        $day_booked = $request['daysbooked'];
        $location   = $request['location'];
        $destination= $request['destination'];
        $reg        = $request['v_reg'];
        $make       = $request['v_make'];
        $capacity   = $request['v_capacity'];
        $driver     = $request['v_driver'];
        $charges    = $request['v_charges'];
        $amount     = $day_booked * $charges;
        $status     = "Open & Valid";

//        $invoicenum = $fname.$code;

        //save data to invoice_tbl
        $query =  DB::table('invoices')->insert([
                    'invoiceNumber' => $invoicenum,
                    'c_fname'       => $fname,      'c_lname'       => $lname,
                    'c_email'       => $email,      'c_phone'       => $phone,
                    'c_location'    => $location,   'day_booked'    => $day_booked,
                    'destination'   => $destination, 'vehicle_reg'  => $reg,
                    'vehicle_make'  => $make,       'vehicle_capacity' => $capacity,
                    'vehicle_driver'=> $driver,     'vehicle_rate'  => $charges,
                    'amountpaid'    => $amount,     'invoicestatus' => $status,
                    'created_at'    => Carbon::now(), 'updated_at'  => Carbon::now()

        ]);

//        check if insertion is successful
        if($query){
            DB::table('vehicles')->update([
                'v_status' => "Booked"
            ]);
            Alert::success('Success ', 'Booking in Progress, Check phone for payment');

        }else{
            Alert::error('Sorry', 'Booking Failed, Try again Later!');

        }
        return back();

    }
}

