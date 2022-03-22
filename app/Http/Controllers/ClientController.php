<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function ourFleet()
    {
        $vehicles = DB::table('vehicles')->paginate(1);
        return view('fleetlisting', compact('vehicles'));
    }
}

// 22020317
// 0793488433
