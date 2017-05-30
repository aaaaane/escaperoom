<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaExtendidaController extends Controller
{
    public function index(Request $request)
    {
        //Crido al model
      
        return view('front.reservaExtendida');
    }
}
