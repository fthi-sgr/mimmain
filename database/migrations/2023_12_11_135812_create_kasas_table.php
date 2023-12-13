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
        Schema::create('kasas', function (Blueprint $table) {
            $table->id();
            $table->string('kasa_adi')->nullable();
            $table->string('kasa_etiket')->nullable();
            $table->date('acilis_tarihi')->nullable();
            $table->string('para_birimi')->nullable();
            $table->decimal('bakiye')->nullable();
            $table->string('aciklama')->nulabble();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasas');
    }
};
