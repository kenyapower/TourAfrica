<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoiceNumber')->unique()->nullable();
            $table->string('c_fname')->nullable();
            $table->string('c_sname')->nullable();
            $table->string('c_lname')->nullable();
            $table->string('c_email')->nullable();
            $table->string('c_phone')->nullable();
            $table->string('c_location')->nullable();
            $table->string('destination')->nullable();
            $table->string('vehicle_reg')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_capacity')->nullable();
            $table->string('vehicle_driver')->nullable();
            $table->string('vehicle_rate')->nullable();
            $table->string('amountpaid')->nullable();
            $table->string('daysbooked')->nullable();
            $table->string('invoicestatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
