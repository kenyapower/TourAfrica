<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    Protected $fillable = ['fname', 'sname', 'lname', 'tos', 'driverimage', 'driverlicense', 'phoneNumber','drivercode'];

    protected $table = 'drivers';

//    public function user() {
//        return $this->belongsToMany('App\user');}

//    public function user()
//    {
//        return $this->belongsTo('App\user');
//    }

    public function users(){
        return $this->belongsToMany(User::class, 'drivers', 'drivercode')->withTimestamps();
    }
}

