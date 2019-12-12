<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarriersContoller extends Controller
{
    
  

    public function __construct()
{
   $this->middleware('auth');
}

    public function index(){
        $carriers = \App\Carrier::all();
        return view("Carriers.index", compact("carriers"));
    }

    public function details(){
        $carriers = \App\Carrier::all();
        return view("Carriers.details", compact("carriers"));
    }

    public function contact(){
        $carriers = \App\Carrier::all();
        return view("Carriers.contact", compact("carriers"));
    }
    public function edit($id)
{
    $user = Auth::user();
   $this->authorize('admin');
   $carriers = \App\Carriers::find($id);
   //$categories = \App\Category::pluck('name','id');
   return view('Carriers.edit', compact('carriers'));
}

}


