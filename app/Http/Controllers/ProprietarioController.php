<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
}
    function store(){
        return view('proprietario-store');
}
    function listar(){
        return view('proprietario-listar');
}
    function remove($id){
   ProprietarioModel::destroy($id);

   return redirect()->route('proprietario-listar');
    
}
    function editar(){
        return view('proprietario-editar');
}
}
