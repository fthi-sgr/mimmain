<?php

// database/migrations/xxxx_xx_xx_create_caris_table.php

// database/migrations/xxxx_xx_xx_create_caris_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarisTable extends Migration
{
    public function up()
    {
        Schema::create('caris', function (Blueprint $table) {

            // $table->bigIncrements('id');
            // $table->unsignedBigInteger('company_id')->comment('hangi firmaya ait olduğunu belirtmek için kullanılacak')->nullable();
            


            $table->id('id'); // otomatik artam ID sütunu
            $table->string('cari_kodu');
            $table->string('cari_turu');
            $table->string('cari_adi');
            $table->string('cari_tipi');
            $table->string('kisa_ad');
            $table->string('cari_etiket');
            $table->string('vergi_no');
            $table->string('vergi_dairesi');
            $table->string('yetkili');
            $table->string('yetkili_tel');
            $table->string('email');
            $table->integer('vade_gunu');
            $table->decimal('iskonto', 3, 1);
            $table->string('referans');
            $table->text('aciklama');
            $table->timestamps();
           
        });
    }

    public function down()
    {
        Schema::dropIfExists('caris');
    }
}