<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cari extends Model
{
    protected $fillable=[
        
        'cari_kodu',
        'cari_turu',
        'cari_adi',
        'cari_tipi',
        'kisa_ad',
        'car_etiket',
        'vergi_no',
        'vergi_dairesi',
        'yetkili',
        'yetkili_tel',
        'email',
        'vade_gunu',
        'iskonto', 
        'referans', 
        'aciklama',
        '_token' 
        
    ];
}
