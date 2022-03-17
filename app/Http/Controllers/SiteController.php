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
        return view('site.dash_index');
    }

    public function allDrivers()
    {
//        $start1 = microtime(true);

        $drivers = DB::table('drivers')->get();

//        $time2 = microtime(true) - $start1;
//        dd($time2);
        return view('site.drivers', compact('drivers'));
    }
}
