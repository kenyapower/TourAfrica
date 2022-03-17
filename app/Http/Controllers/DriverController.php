<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class DriverController extends Controller
{
    public function myProfile($usercode)
    {
//        $start = microtime(true);
        $myInfo = DB::table('drivers')
            ->join('users','drivers.drivercode','=','users.usercode')
            ->where('drivers.drivercode', '=', $usercode)
            ->first();
//        $time = microtime(true) - $start;
        return view('site.myProfile', compact('myInfo'));
    }

    public function updatePass(Request $request, $usercode)
    {
//        dd($request);
//        $usercode = Auth::user()->usercode;
        $validator = Validator::make($request->all(), [
//        $this->validate($request, [
            'old_password'          => 'required',
            'password'              => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
//        dd($validator);

        if ($validator->fails()) {
            toast('Password Mismatch, Try Again', 'warning');
            return back();

        } else {
             DB::table('users')->where(['usercode' => $usercode])
                ->update([
                    'password' => Hash::make($request['password'])
                ]);

            Alert::success('Success ', 'Password Changed Successfully! Login Afresh!');

            $request->session()->flush();
            return redirect()->route('login');

        }
    }
}
