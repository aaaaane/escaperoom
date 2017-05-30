<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class SalesController extends Controller
{
       public function index()
    {
        //Crido al model
       $rooms = Room::all();

        //Crido a la vista
        return view('front.sales', compact('rooms'));
    }
}
