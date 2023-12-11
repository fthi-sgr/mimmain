<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Models\Banka;
use App\Models\Kasa;
use App\Models\Kart;
use App\Models\Obanka;
use App\Models\Cek;
use App\Models\Senet;



class FinansController extends Controller
{
    public function bankaindex()
    {
        $bankas =Banka::all();

        return view('bankas.index',compact('bankas'));
    }
}
