<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{   
    //creation d'une fonction
    public function index()
    {
    return view('contact');
    }
}
