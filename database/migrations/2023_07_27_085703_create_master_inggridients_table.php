<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterInggridientsTable extends Migration
{
    public function up()
    {
        Schema::create('master_inggridients', function (Blueprint $table) {
            $table->id('id_inggridient');
            $table->String('name_inggridient');
            $table->bigInteger('qty_inggridient')->default(0);
            $table->String('unit_inggridient');
            $table->bigInteger('price_inggridient');
            $table->integer('duration_expired')->default('1');
            $table->String('time_expired')->default('month');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_inggridients');
    }
}
