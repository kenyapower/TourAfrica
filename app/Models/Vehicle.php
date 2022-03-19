<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = [
        'v_reg' ,'v_make' ,'v_capacity', 'v_charges', 'v_driver', 'v_owner', 'v_status', 'v_image', 'v_bio'
    ];
}
