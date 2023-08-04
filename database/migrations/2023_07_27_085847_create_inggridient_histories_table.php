<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInggridientHistoriesTable extends Migration
{
    public function up(): void
    {
        Schema::create('inggridient_histories', function (Blueprint $table): void {
            $table->id('id_history');
            $table->unsignedBigInteger('id_inggridient');
            $table->date('date');
            $table->bigInteger('stok_in');
            $table->bigInteger('stok_out');
            $table->bigInteger('last_stok');

            $table->foreign('id_inggridient')->references('id_inggridient')->on('master_inggridients')->onDelete('RESTRICT');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inggridient_histories');
    }
}
