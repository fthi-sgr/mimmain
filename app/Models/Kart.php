<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kart extends Model
{
    protected $table= 'kasas';
    protected $fillable =['kasa_adi','kasa_etiket','acilis_tarihi','para_birimi','bakiye','aciklama'];
    public $timestamps=false;
    use HasFactory;
}
