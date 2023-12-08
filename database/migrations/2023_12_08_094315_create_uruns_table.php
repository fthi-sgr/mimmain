<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateUrunsTable extends Migration
{

    public function up(): void
    {
        Schema::create('uruns', function (Blueprint $table) {
            $table->id('id');
            $table->string('urun_kodu')->unique();
            $table->string('urun_adi')->nullable();
            $table->string('barkod')->nullable();
            $table->string('urun_etiketi')->nullable();
            $table->string('stok_saklama_birimi')->default('gr');
            $table->string('mensei')->nullable();
            $table->string('gtip_no')->nullable();
            $table->text('aciklama')->nullable();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uruns');
    }
};
