<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class VeureReservesController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::all();
      
        return view('front.veureReserves', compact('bookings'));
    }

 public function __construct()
    {
        $this->middleware('auth');
    }  
 

}
