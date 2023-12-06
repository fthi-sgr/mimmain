<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateUrunlerTable extends Migration
{

    public function up(): void
    {
        Schema::create('urunler', function (Blueprint $table) {
            $table->id();
            $table->string('urun_kodu')->unique();
            $table->string('urun_adi');
            $table->string('barkod');
            $table->string('urun_etiketi');
            $table->string('stok_saklama_birimi');
            $table->string('mensei');
            $table->string('gtip_no');
            $table->text('aciklama');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
