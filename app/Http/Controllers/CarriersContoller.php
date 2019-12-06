<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarriersContoller extends Controller
{
    public function index(){
        $carriers = \App\Carrier::all();
        return view("Carriers.index", compact("carriers"));
    }

    public function create(){
        return view(view.'Carriers.create');
    }
}


