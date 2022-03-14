<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use http\Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'sname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'tos' => ['required', 'string', 'max:255'],
            'driverimage' => ['required', 'file', 'max:255'],
            'driverlicense' => ['required', 'file', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phoneNumber' => ['required', 'string', 'min:10', 'max:10','unique:drivers'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);

        $drivercode = Str::random(5);

        $num        = $data['phone'];
        $name1      = $data['fname'];
        $name2      = $data['sname'];
        $name3      = $data['lname'];
        $dimage     = $data['driverimage'];
        $dl         = $data['driverlicense'];
        $dlevel     = $data['driverlevel'];
        $tos        = $data['tos'];

        $uposition  = "Driver";
        $ulevel     = "Primary";

        if ($num[0] === '0') {
            $number = substr($num, 1);
            $phoneNumber = '254' . $number;
        }

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
                'driverimage'   =>  $dimage,
                'driverlicense' =>  $dl,
                'driverlevel'   =>  $dlevel,
                'tos'           =>  $tos,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);

//            $user = User::create([
//                'usercode'  => $drivercode,
//                'name' => $data['name'],
//                'email' => $data['email'],
//                'password' => Hash::make($data['password']),
//                'userposition' => $uposition,
//                'userlevel' => $ulevel,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ]);
        }

        return User::create([
            'usercode'      => $drivercode,
            'name'          => $data['name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'userposition'  => $uposition,
            'userlevel'     => $ulevel,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }
}
