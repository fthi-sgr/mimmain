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
        Schema::create('hizmets', function (Blueprint $table) {
            $table->id();
            $table->string('hizmet_kodu')->unique();
            $table->string('barkod')->nullable();
            $table->string('hizmet_adi')->nullable();
            $table->string('hizmet_etiketi')->nullable();
            $table->decimal('kdv', 5 , 2);
            $table->string('mensei')->nullable();
            $table->string('aciklama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hizmets');
    }
};
