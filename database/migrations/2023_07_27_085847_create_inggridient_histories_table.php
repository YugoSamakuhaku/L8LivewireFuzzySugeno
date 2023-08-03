<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInggridientHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inggridient_histories', function (Blueprint $table) {
            $table->id('id_history');
            $table->unsignedBigInteger('id_inggridient');
            $table->date('date');
            $table->bigInteger('stok_in');
            $table->bigInteger('stok_out');
            $table->bigInteger('last_stok');

            $table->foreign('id_inggridient')->references('id_inggridient')->on('master_inggridients')->onDelete('RESTRICT');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inggridient_histories');
    }
}
