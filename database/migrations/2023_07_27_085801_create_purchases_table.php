<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id('id_purchase');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_supplier');
            $table->bigInteger('qty_purchase_inggridients');
            $table->date('date_purchase');
            $table->timestamps();

            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers')->onDelete('RESTRICT');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
