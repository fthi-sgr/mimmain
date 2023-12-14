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

            // $table->bigIncrements('id');
            // $table->unsignedBigInteger('company_id')->comment('hangi firmaya ait olduğunu belirtmek için kullanılacak')->nullable();

            $table->id('id'); // otomatik artam ID sütunu
            $table->string('cari_kodu')->unique();
            $table->string('cari_turu')->nullable();
            $table->string('cari_adi')->nullable();
            $table->string('cari_tipi')->nullable();
            $table->string('kisa_ad')->nullable();
            $table->string('cari_etiket')->nullable();
            $table->string('vergi_no')->nullable();
            $table->string('vergi_dairesi')->nullable();
            $table->string('yetkili')->nullable();
            $table->string('yetkili_tel')->nullable();
            $table->string('email')->nullable();
            $table->integer('vade_gunu')->nullable();
            $table->decimal('iskonto', 3, 1)->nullable();
            $table->string('referans')->nullable();
            $table->text('aciklama')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('caris');
    }
}
