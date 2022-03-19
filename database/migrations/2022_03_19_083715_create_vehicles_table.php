<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('v_reg')->unique()->nullable();
            $table->string('v_make')->nullable();
            $table->string('v_capacity')->nullable();
            $table->string('v_charges')->nullable();
            $table->string('v_driver')->nullable();
            $table->string('v_owner')->nullable();
            $table->string('v_status')->nullable();
            $table->string('v_image')->nullable();
            $table->string('v_bio')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
