<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use http\Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phoneNumber' => ['required', 'string', 'min:10', 'max:10','unique:drivers'],
            'driverimage' => ['required', 'string', 'max:255'],
            'driverlicense' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'tos' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return string
     * @return \App\Models\Driver
     */

    public function create(Request $request)
    {

        $drivercode = Str::random(5);

        $num        = $request['phone'];
        $name1      = $request['fname'];
        $name2      = $request['sname'];
        $name3      = $request['lname'];
        $tos        = $request['tos'];
        $uposition  = "Driver";
        $ulevel     = "Primary";
        $uname      = $request['fname'];
        $dimage     = $drivercode.'.'.$request['driverimage']->getClientOriginalName();
        $dl         = $drivercode.'.'.$request['dl']->getClientOriginalName();

        if ($num[0] === '0') {
            $number = substr($num, 1);
            $phoneNumber = '254' . $number;

            //first check if phone number exist in driver_tbl
            //if does not exist send verification sms
            $phoneExist = Driver::where('phoneNumber', '=', $phoneNumber)->exists();

            if ($phoneExist == false) {
                //insert sent message to sentmessages_tbl
                DB::table('drivers')->insert([
                    'drivercode'    => $name1.$drivercode,
                    'fname'         =>  $name1,
                    'sname'         =>  $name2,
                    'lname'         =>  $name3,
                    'phoneNumber'   =>  $phoneNumber,
                    'tos'           =>  $tos,
                    'driverimage'   =>  $dimage,
                    'driverlicense' =>  $dl,
                    'driverlevel'   =>  $ulevel,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ]);

                DB::table('users')->insert([
                    'usercode'      => $name1.$drivercode,
                    'name'          => $uname,
                    'email'         => $request['email'],
                    'password'      => Hash::make($request['password']),
                    'userposition'  => $uposition,
                    'userlevel'     => $ulevel,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ]);

                //move images only after inserting
                //move driver profile
                $destinationPath = public_path('/uploads/profiles/');
                $request['driverimage']->move($destinationPath, $dimage);
                //move driver license
                $request['dl']->move(public_path('/uploads/Licenses/'), $dl);

                //after successful Insertion
                Alert::success('Success ', 'Congratulations Proceed to Login');

                return redirect('/login');

//                return redirect('/login')->with('success', 'Account Creation Successful Proceed to Login');
            }else{
                Alert::info('Sorry', 'Phone Number Exists!! Use Another');

                return back();
//                return back()->with('error', 'Phone Number Exists!! Use Another');
            }
        }
        Alert::error('Check Phone Number', 'should start with 07 / 01!');

        return back();

//        return back()->with('error', 'Phone Number should start with 07 / 01!');
    }

}
