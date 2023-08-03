<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('detail_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_purchase');
            $table->unsignedBigInteger('id_inggridient');
            $table->date('date_expired');
            $table->bigInteger('qty');
            $table->bigInteger('total_price_inggridient');

            $table->foreign('id_purchase')->references('id_purchase')->on('purchases')->onDelete('RESTRICT');
            $table->foreign('id_inggridient')->references('id_inggridient')->on('master_inggridients')->onDelete('RESTRICT');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_purchases');
    }
}
