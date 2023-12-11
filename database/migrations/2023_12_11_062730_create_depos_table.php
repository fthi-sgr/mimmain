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
        Schema::create('depos', function (Blueprint $table) {
            $table->id();
            $table->string('depo_kodu');
            $table->string('depo_adi');
            $table->date('acilis_tarihi');
            $table->string('adres');
            $table->string('il');
            $table->string('ilce');
            $table->string('posta_kodu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depos');
    }
};
