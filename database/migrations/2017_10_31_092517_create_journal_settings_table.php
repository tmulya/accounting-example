<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_settings', function (Blueprint $table) {
            $table->string('id',32)->index();
            $table->primary('id');
            $table->string('name');
            $table->string('chart_code');
            $table->foreign('chart_code')->references('chart_code')->on('charts');
            $table->string('formula');
            $table->enum('transaction',['debet','credit']);
            $table->integer('queue')->unsigned()->nullable();
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
        Schema::dropIfExists('journal_settings');
    }
}
