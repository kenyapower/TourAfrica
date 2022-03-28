<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Exception;
use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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

    public function myvehicles()
    {
        $usercode   = Auth::user()->usercode;

        $mycars = DB::table('vehicles')->where('v_owner',$usercode)->get();
        return view('site.myVehicles', compact('mycars', 'usercode'));

    }

    public function myinvoices()
    {
        $usercode   = Auth::user()->usercode;
        $myinvoices = DB::table('invoices')
            ->join('drivers', 'drivers.drivercode','=','invoices.vehicle_driver')
            ->where('drivers.drivercode',$usercode)
            ->paginate(2);
        return view('site.myinvoices', compact('myinvoices'));
    }

    public function addAss(Request $request)
    {
        $registeredby   = Auth::user()->usercode;
        $drivercode     = Str::random(5);
        $pass           = "password";
        $password       = Hash::make($pass);

        $num            = $request['phone'];
        $name1          = $request['fname'];
        $name2          = $request['sname'];
        $name3          = $request['lname'];
        $tos            = 'Agreed';
        $uposition      = "Driver";
        $ulevel         = "Assistant";
        $uname          = $request['fname'];
        $dimage         = $drivercode . '.' . $request['profile']->getClientOriginalName();
        $dl             = $drivercode . '.' . $request['dl']->getClientOriginalName();

        if ($num[0] === '0') {
            $number = substr($num, 1);
            $phoneNumber = '254' . $number;

            //first check if phone number exist in driver_tbl
            //if does not exist send verification sms
            $phoneExist = Driver::where('phoneNumber', '=', $phoneNumber)->exists();

            if ($phoneExist == false) {
                //insert sent message to sentmessages_tbl
                DB::table('drivers')->insert([
                    'drivercode'    => $name1 . $drivercode,
                    'fname'         => $name1,
                    'sname'         => $name2,
                    'lname'         => $name3,
                    'phoneNumber'   => $phoneNumber,
                    'tos'           => $tos,
                    'driverimage'   => $dimage,
                    'driverlicense' => $dl,
                    'driverlevel'   => $ulevel,
                    'registeredby'   => $registeredby,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ]);

                DB::table('users')->insert([
                    'usercode'      => $name1 . $drivercode,
                    'name'          => $uname,
                    'email'         => $request['email'],
                    'password'      => $password,
                    'userposition'  => $uposition,
                    'userlevel'     => $ulevel,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ]);

                //move images only after inserting
                //move driver profile
                $destinationPath = public_path('/uploads/profiles/');
                $request['profile']->move($destinationPath, $dimage);
                //move driver license
                $request['dl']->move(public_path('/uploads/Licenses/'), $dl);

                //after successful Insertion
                Alert::success('Success ', 'Bingo! Assistant Driver created');

            } else {
                Alert::info('Sorry', 'Phone Number Exists!! Use Another');

            }

            return back();
        }
        Alert::error('Check Phone Number', 'should start with 07 / 01!');

        return back();
    }


    public function addVehicle(Request $request)
    {
        $owner            = Auth::user()->usercode;
        $vreg           = $request['v_reg'];
        $vmake          = $request['v_make'];
        $vcapacity      = $request['v_capacity'];
        $vcharges       = $request['v_charges'];
        $vstatus        = "Available";
        $vimage         = $owner. '.' . $request['v_image']->getClientOriginalName();

        //first check if vehicle exist in vehicle_tbl
        $platenumber = Vehicle::where('v_reg', '=', $vreg)->exists();

        if ($platenumber == false) {
            //insert sent message to sentmessages_tbl
            DB::table('vehicles')->insert([
                'v_reg'         => $vreg,
                'v_make'        => $vmake,
                'v_capacity'    => $vcapacity,
                'v_charges'     => $vcharges,
                'v_owner'       => $owner,
                'v_status'      => $vstatus,
                'v_image'       => $vimage,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);

            //move vehicle image
            $request['v_image']->move(public_path('/uploads/vehicles/'), $vimage);

            //after successful Insertion
            Alert::success('Success ', 'Bingo! You added Vehicle');

        } else {
            Alert::info('Sorry', 'Vehicle exists in our Records');

        }

        return back();
    }

    public function updatePass(Request $request, $usercode)
    {
        $validator = Validator::make($request->all(), [
            'old_password'          => 'required',
            'password'              => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

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

    public function deleteAcc(Request $request, $usercode)
    {
        try {
            //delete all records from vehicles tbl
            Vehicle::where('owner', $usercode)->delete();
            //delete record from drivers tbl
            Driver::where('drivercode', $usercode)->delete();
            //delete record from users tbl
            User::where('usercode', $usercode)->delete();

            $request->session()->flush();

            return redirect()->route('login');

        } catch (Exception $e) {

            return $e->getMessage();
        }

    }
}
