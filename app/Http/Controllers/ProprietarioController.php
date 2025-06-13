<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietarioModel;

class ProprietarioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $proprietario = new ProprietarioModel();
            $proprietario->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $proprietario = ProprietarioModel::find($dados->id); //localiza o registro
            $update = $proprietario->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $proprietarios = ProprietarioModel::all();

        //após adicionar ou editar redireciona para a página listar
        return view('proprietario-listar', ['proprietarios'=>$proprietarios]);
    }

    function listar(){
        $proprietarios = ProprietarioModel::all();
        
        return view('proprietario-listar', ['proprietarios'=>$proprietarios]);
    }

    function remove($id){
        ProprietarioModel::destroy($id);

        return redirect()->route('proprietario-listar');
    }
    
    function editar($id){
		$proprietario = ProprietarioModel::find($id);


        return view('proprietario-formulario', ['proprietario' => $proprietario]);
        //vamos enviar o $veiculo que veio do BD para a página veiculo-formulario
    }
}
