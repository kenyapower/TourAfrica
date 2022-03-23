<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = [
        'invoiceNumber', 'c_fname', 'c_lname', 'c_email',
        'c_phone', 'c_location', 'day_booked', 'destination', 'vehicle_reg',
        'vehicle_make', 'vehicle_capacity', 'vehicle_driver',
        'vehicle_rate', 'amountpaid', 'invoicestatus'
    ];

}
