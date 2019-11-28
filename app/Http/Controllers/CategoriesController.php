<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return"je suis la page index";
    }

    public function show($id){
        return"je suis la categorie $id";
    }
}

