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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('banka_adi')->nullable();
            $table->string('etiket')->nullable();
            $table->string('banka_sube')->nullable();
            $table->string('iban')->nullable();
            $table->date('acilis_tarihi')->nullable();
            $table->string('para_birimi')->nullable();
            $table->decimal('bakiye', 15, 2)->nullable();
            $table->string('banka_hesap_adi')->nullable();
            $table->string('hesap_no')->nullable();
            $table->string('aciklama')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
