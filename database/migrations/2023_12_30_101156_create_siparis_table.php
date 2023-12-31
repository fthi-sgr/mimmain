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
        Schema::create('siparis', function (Blueprint $table) {
            $table->increments('id'); // Otomatik artan birincil anahtar
            $table->integer('siparisTipi')->default(0); //0 ise Satış , 1 ise Alış 

            $table->String('cari_adi')->nullable();
            $table->string('cari_adresi')->nullable();
            $table->date('siparis_tarihi')->nullable();
            $table->date('teslim_terihi')->nullable();
            $table->string('para_birimi')->nullable();
            $table->string('siparis_no')->nullable();
            $table->string('proje')->nullable();
            $table->string('etiket')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('dosya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparis');
    }
};
