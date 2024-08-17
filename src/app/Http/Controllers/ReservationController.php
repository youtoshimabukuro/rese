<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        return view('index');
    }

    public function shopDetail()
    {
        return view('shop_detail');
    }
}
