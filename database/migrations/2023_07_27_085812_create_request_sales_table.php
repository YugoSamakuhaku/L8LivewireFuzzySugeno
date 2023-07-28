<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_sales', function (Blueprint $table) {
            $table->id('id_sale');
            $table->unsignedBigInteger('id_user');
            $table->integer('qty_sale');
            $table->date('date_sale');
            $table->timestamps();

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
        Schema::dropIfExists('request_sales');
    }
}
