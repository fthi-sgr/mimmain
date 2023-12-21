<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cari extends Model
{

    protected $table='caris';
    protected $fillable = ['cari_adi', 'cari_adresi'];

}
