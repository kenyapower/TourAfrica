<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('drivercode')->nullable()->unique();
            $table->string('fname')->nullable();
            $table->string('sname')->nullable();
            $table->string('lname')->nullable();
            $table->string('phoneNumber')->nullable()->unique();
            $table->string('driverimage')->nullable();
            $table->string('driverlicense')->nullable();
            $table->string('driverlevel')->nullable();
            $table->string('registeredby')->nullable();
            $table->string('tos')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
