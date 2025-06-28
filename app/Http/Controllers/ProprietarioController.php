<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietarioModel;

class ProprietarioController extends Controller
{
    function formulario()
    {
        return view('proprietario-formulario');
    }

    function store(Request $dados)
    {
        if ($dados->id == '') {

            $proprietarios = new ProprietarioModel();
            $proprietarios->create($dados->all());
        } else {
            $proprietarios = ProprietarioModel::find($dados->id); //localiza o registro
            $update = $proprietarios->update($dados->all()); //atualiza
        }

        $proprietarios = ProprietarioModel::all();

        return view('proprietario-listar', ['proprietarios' => $proprietarios]);
    }

    function list()
    {
        $proprietarios = ProprietarioModel::all();

        return view('proprietario-listar', ['proprietarios' => $proprietarios]);
    }

    function remove($id)
    {
        ProprietarioModel::destroy($id);

        return redirect()->route('proprietario-listar');
    }

    function editar($id)
    {
        $proprietario = ProprietarioModel::find($id);

        return view('proprietario-formulario', ['proprietario' => $proprietario]);
    }
}