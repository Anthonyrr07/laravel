<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastraranimal extends Controller
{
    function cadastraranimal() {
        return view('cadastrar-animal');
    }
}
