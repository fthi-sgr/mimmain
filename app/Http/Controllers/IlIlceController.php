<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IlIlceController extends Controller
{
    public function getIlIlceler()
    {
        $response = Http::get('API_URL_FOR_ILLER');
        $iller = $response->json();
        return response->json();
    }

}
