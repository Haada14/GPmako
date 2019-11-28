<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DEtailsController extends Controller
{
    public function show($id){
        return view("Colis.show", compact("id"));
    }
}
