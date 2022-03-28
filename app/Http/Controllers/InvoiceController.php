<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class InvoiceController extends Controller
{
    //
    public function clientinvoice()
    {
        return view('invoice');
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'query' => ' required|min:6',
        ]);

        //
        if ($validator->fails()) {

            Alert::error('Sorry', 'Query rules failed Min search "6 characters" !');

        }

        $query = $request->input('query');
//        dd($query);
        Log::info('Search Request >>> '.$query);

        $invoices = Invoice::latest()->where('invoiceNumber', 'LIKE', '%'.$query.'%')->orwhere('c_phone','LIKE',  '%'.$query.'%')->get();

        if ($invoices->fails()) {

            Alert::error('Oops', 'No Invoice Found !!!');

        }

        dd($invoices);
        Log::info('Invoices Found >>> '.$invoices->count());
        return view('invoice', compact('invoices'));
    }

    public function invoicedetails($invoiceNumber)
    {
        $mydetails = DB::table('invoices')
            ->join('vehicles','vehicles.v_reg', '=', 'invoices.vehicle_reg')
            ->join('drivers','drivers.drivercode', '=', 'invoices.vehicle_driver')
            ->where('invoiceNumber', $invoiceNumber)
            ->get();
//        dd($mydetails);
        return view('site.invoicedetails', compact('mydetails'));
    }

}
