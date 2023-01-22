<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
      //creation d'une fonction
    public function index()
    {
    return view('accueil');
    }
}
