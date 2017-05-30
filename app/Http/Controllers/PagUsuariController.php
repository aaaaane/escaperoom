<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PagUsuariController extends Controller
{
    public function index(Request $request)
    {
       
       
      
        return view('front.pagUsuari');
    }
     public function __construct()
    {
        $this->middleware('auth');
    }   
}
