<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()                        {return view('dashboard.index');}
    function cryptocurrency()               {return view('dashboard.cryptocurrency');}
    function campaign()                     {return view('dashboard.campaign');}
    function ecommerce()                    {return view('dashboard.ecommerce');}
}
