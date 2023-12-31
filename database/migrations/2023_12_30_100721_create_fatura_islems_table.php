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
        Schema::create('fatura_islems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faturaId');
            $table->integer('siparisId');
            $table->integer('miktar');
            $table->double('fiyat');
            $table->integer('kdv');
            $table->double('araToplam');
            $table->double('kdvToplam');
            $table->double('genelToplam');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fatura_islems');
    }
};
