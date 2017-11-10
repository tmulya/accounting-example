<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->string('id',32)->index();
            $table->primary('id');
            $table->string('chart_code');
            $table->foreign('chart_code')->references('chart_code')->on('charts');
            $table->double('debet');
            $table->double('credit');
            $table->text('description');
            $table->datetime('journal_date');
            $table->string('ext_no');
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
        Schema::dropIfExists('journals');
    }
}
