<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_siparis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparisTable extends Migration
{
    public function up()
    {
        Schema::create('siparis', function (Blueprint $table) {
            $table->id(); // Otomatik artan birincil anahtar

            $table->String('cari_adi');
            $table->string('cari_adresi');
            $table->date('siparis_tarihi');
            $table->date('teslim_terihi');
            $table->string('para_birimi');
            $table->string('siparis_no');
            $table->string('proje')->nullable();
            $table->string('etiket')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('dosya')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siparis');
    }
}
