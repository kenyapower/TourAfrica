<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SiteController extends Controller
{
    public function dashindex()
    {
//        $user = Auth::user()->id;
        $drivers =  DB::table('drivers')->count();
        $cars    =  DB::table('vehicles')->count();
        $invoices = DB::table('invoices')->count();

        return view('site.dash_index', compact('drivers','cars','invoices'));
    }

    public function allDrivers()
    {
//        $start1 = microtime(true);

        $drivers = DB::table('drivers')
            ->join('vehicles','drivers.drivercode','=','vehicles.v_driver')
            ->join('users','drivers.drivercode', '=','users.usercode')
            ->paginate('1');

//        $time2 = microtime(true) - $start1;
//        dd($drivers);
        return view('site.drivers', compact('drivers'));
    }

    public function fleet()
    {
        //get all vehicles and owners info
        $motors = DB::table('vehicles')
            ->join('drivers', 'vehicles.v_owner','=', 'drivers.drivercode')
            ->paginate(2);
//        dd($motors);
        return view('site.fleet', compact('motors'));
    }

    public function invoices()
    {
        $invoices = DB::table('invoices')
            ->join('vehicles','vehicles.v_reg', '=', 'invoices.vehicle_reg')
            ->Distinct()
            ->latest('invoices.created_at')
            ->paginate(6);
        return view('site.invoices', compact('invoices'));
    }

}
