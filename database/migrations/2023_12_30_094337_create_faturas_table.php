<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faturaTipi')->default(0)->comment('0 ise satış , 1 ise alış'); // 0 ise Satış , 1 ise Alıs Faturası
            $table->string('faturaNo');
            $table->string('cariId');
            $table->string('urunId');
            $table->date('faturaTarih');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faturas');
    }
};
