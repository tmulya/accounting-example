<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('charts', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('chart_code')->unique();
            $table->string('sub_chart')->nullable();
            $table->string('chart_name')->unique();
            $table->integer('subno')->default(0);
            $table->enum('transaction',['debet','credit']);
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('chart_groups');
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
        Schema::dropIfExists('charts');
        Schema::dropIfExists('chart_groups');
    }
}
