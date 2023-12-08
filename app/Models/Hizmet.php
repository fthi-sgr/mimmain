<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hizmet extends Model
{
    protected $table ='hizmet';
    protected $fillable = [
        'hizmet_kodu',
        'barkod',
        'hizmet_adi',
        'hizmet_etiketi',
        'kdv',
        'mensei',
        'aciklama',
    ];

    public function kdv()
    {
        return @this->belongsTo(Kdv::class,'Kdv','id');
    }
}
