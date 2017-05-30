<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondicionsLegalsController extends Controller
{
    public function index()
    {
       

        //Crido a la vista
        return view('front.condicionsLegals');
    }
}
