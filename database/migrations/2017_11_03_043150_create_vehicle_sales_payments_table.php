<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleSalesPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_sales_payments', function (Blueprint $table) {
            $table->string('id', 32)->index();
            $table->primary('id');
            $table->double('payment_price');
            $table->datetime('payment_date');
            $table->enum('payment_type',['cash','transfer']);
            $table->string('bank_id');
            $table->string('sales_no');
            $table->foreign('sales_no')->references('sales_no')->on('vehicle_sales')->onDelete('cascade');
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
        Schema::dropIfExists('vehicle_sales_payments');
    }
}
