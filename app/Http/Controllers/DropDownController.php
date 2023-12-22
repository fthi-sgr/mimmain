<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cari;
class DropDownController extends Controller
{
    public function indexCari(){
        $caris= Cari::get(['cari_adi','id']);
        return view('asiparis.create', compact('caris'));
    }
}
