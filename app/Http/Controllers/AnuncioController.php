<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;
use App\Models\ProprietarioModel;
use App\Models\VeiculoModel;

class AnuncioController extends Controller
{
    function formulario(Request $request)
    {
        $proprietarios = ProprietarioModel::all();
        $veiculos = VeiculoModel::whereDoesntHave('anuncio')->get();
        $anuncio = $request->anuncio ?? null;

        return view('anuncio-formulario', [
            'proprietarios' => $proprietarios,
            'veiculos' => $veiculos,
            'anuncios' => $anuncio
        ]);
    }

    function store(Request $dados)
    {
        if ($dados->id == '') {

            $anuncio = new AnuncioModel();
            $anuncio->create($dados->all());
        } else {

            $anuncio = AnuncioModel::find($dados->id); //localiza o registro
            $update = $anuncio->update($dados->all()); //atualiza
        }

        $anuncios = AnuncioModel::all();

        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    function list()
    {
        $anuncios = AnuncioModel::all();

        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    function remove($id)
    {
        AnuncioModel::destroy($id);

        return redirect()->route('anuncio-listar');
    }

    function editar($id)
    {
        $anuncio = AnuncioModel::find($id);
        $proprietarios = ProprietarioModel::all();
        $veiculos = VeiculoModel::all();

        return view('anuncio-formulario', [
            'proprietarios' => $proprietarios,
            'veiculos' => $veiculos,
            'anuncios' => $anuncio
        ]);
    }
}