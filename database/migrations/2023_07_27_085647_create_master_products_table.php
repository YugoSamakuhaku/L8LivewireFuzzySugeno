<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterProductsTable extends Migration
{
    public function up()
    {
        Schema::create('master_products', function (Blueprint $table) {
            $table->id('id_product');
            $table->String('name_product');
            $table->String('unit_product')->default('cup');
            $table->bigInteger('price_product');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_products');
    }
}
