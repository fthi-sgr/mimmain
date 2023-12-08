<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kdv extends Model
{
    protected $table ='kdv';
    protected $fillable = [
        'oran',
    ];
}
