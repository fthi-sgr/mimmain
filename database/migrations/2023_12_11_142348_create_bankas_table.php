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
        Schema::create('bankas', function (Blueprint $table) {
            $table->id();
            $table->string('banka_adi');
            $table->string('etiket');
            $table->string('banka_sube');
            $table->string('iban');
            $table->date('acilis_tarihi');
            $table->string('para_birimi');
            $table->decimal('bakiye', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bankas');
    }
};
