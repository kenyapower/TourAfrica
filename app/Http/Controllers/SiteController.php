<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SiteController extends Controller
{
    public function dashindex()
    {
        $user = Auth::user()->id;
//        dd($user);
        return view('site.dash_index');
    }
}
