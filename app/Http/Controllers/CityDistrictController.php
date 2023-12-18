<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Districts;

class CityDistrictController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('index', compact('cities'));
    }

    public function getDistricts($cityId)
    {
        $districts = City::finOrFail($cityId)->districts;
        return response()->json($districts);
    }
}
