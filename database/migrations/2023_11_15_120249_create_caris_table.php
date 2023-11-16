<?php

// database/migrations/xxxx_xx_xx_create_caris_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarisTable extends Migration
{
    public function up()
    {
        Schema::create('caris', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->string('telefon');
            $table->timestamps();
            $table->string('_token')->default(''); // varsayılan değeri boş dizgi olarak belirtildi
        });
    }

    public function down()
    {
        Schema::dropIfExists('caris');
    }
}
