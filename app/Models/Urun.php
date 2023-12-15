<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    protected $table='uruns';
    protected $fillable = ['urun_kodu', 'urun_adi', 'barkod', 'urun_etiketi', 'stok_saklama_birimi', 'mensei', 'gtip_no', 'aciklama'];

   public $timestamps=false;


}
