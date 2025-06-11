<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
}
    function store(){
        return view('anuncio-store');
}
    function listar(){
        return view('anuncio-listar');
}
    function remove($id){
    AnuncioModel::destroy($id);

    return redirect()->route('anuncio-listar');
}
    function editar(){
        return view('anuncio-editar');
}
}
