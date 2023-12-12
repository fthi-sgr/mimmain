<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banka extends Model
{
    protected $table='banks';
    //protected $fillable= ['banka_adi','etiket','banka_sube','iban','para_birimi','bakiye','banka_hesap_adi','hesap_no','aciklama'];
    protected $dates = ['acilis_tarihi'];
    public $timestamps=false;

}
