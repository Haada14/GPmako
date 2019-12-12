<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function connexion()
    {
        return view('/utilisateurs.connexion');

    }
}
