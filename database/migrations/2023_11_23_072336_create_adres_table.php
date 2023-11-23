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
        Schema::create('adres', function (Blueprint $table) {
            $table->id();
            $table->string('adres_adi');
            $table->string('adres_tipi');
            $table->string('adres');
            $table->string('il');
            $table->string('ilce');
            $table->string('telefon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adres');
    }
};
