<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_sales_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('leasings', function (Blueprint $table) {
            $table->string('id', 32)->index();
            $table->primary('id');
            $table->string('leasing_no')->unique();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->string('id', 32)->index();
            $table->primary('id');
            $table->string('frame_no');
            $table->string('engine_no');
            $table->string('vehicle_code');
            $table->string('vehicle_name');
            $table->string('vehicle_color');
            $table->string('ext_no');
            $table->timestamps();
        });

        Schema::create('vehicle_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->double('price_hpp');
            $table->double('price_otr');
            $table->double('price_off');
            $table->double('price_bbn');
            $table->double('price_disc');
            $table->datetime('price_date');
        });

        Schema::create('vehicle_sales', function (Blueprint $table) {
            $table->string('id', 32)->index();
            $table->primary('id');
            $table->string('sales_no')->unique();
            $table->datetime('sales_date');

            $table->string('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');

            $table->integer('type_id')->unsigned();//cash / credit
            $table->foreign('type_id')->references('id')->on('vehicle_sales_types');

            $table->string('leasing_no')->nullable();
            $table->foreign('leasing_no')->references('leasing_no')->on('leasings');
            $table->double('price_otr')->unsigned()->nullable();
            $table->double('price_bbn')->unsigned()->nullable();
            $table->double('price_disc')->unsigned()->nullable();
            $table->double('price_dp')->unsigned()->nullable();
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
        Schema::dropIfExists('vehicle_sales');
        Schema::dropIfExists('vehicle_prices');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('vehicle_sales_types');
        Schema::dropIfExists('leasings');
    }
}
