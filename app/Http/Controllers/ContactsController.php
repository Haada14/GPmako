<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contact(){
        $carriers = \App\Carrier::all();
        return view("Carriers.contact", compact("carriers"));
    }
}