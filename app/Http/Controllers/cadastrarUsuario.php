<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
  public function index(){
    $dados = cadastrarUsuarioModel::all();

    return view('paginas.Cadastrar') ->With('dados', $dados);

  }//fim do metodo index
  public function store(Request $request){
    $nomeUsuario = $request->input('nome');
    $descricao = $request->input('descricao');
    
    $model = new cadastrarUsuarioModel();
    $model->nome = $nomeUsuario;
    $model->descricao = $descricao;
    $model->data_hora = $request->input('data_hora');
    $model->save();//Armazenar dados 

    return redirect('/cadastrar');
  } 

  public function consultar(){
    $dados = cadastrarUsuarioModel::all();

    return view('paginas.consultar', compact('dados'));
  }

  public function editar($id)
    {
        $dado = cadastrarUsuarioModel::findOrFail($id);

        return view('paginas.editar', compact('dado'));
    }//fim do método

  public function atualizar($id)
    {
        // Obtenha os dados do banco de dados usando o ID
        $dado = cadastrarUsuarioModel::find($id);
    
        return view('editar', compact('dado'));
    }
    
  public function atualizarPost(Request $request, $id)
    {
        // Lógica para atualizar os dados no banco de dados usando os dados do formulário
    
        // Redirecionar ou retornar uma resposta adequada após a atualização
    }
    

    public function excluir($id)
{
    cadastrarUsuarioModel::destroy($id);
    
    return redirect('/consultar');
}

    
    public function excluirPost(Request $request, $id)
    {
        // Lógica para excluir os dados do banco de dados usando o ID
    
        // Redirecionar ou retornar uma resposta adequada após a exclusão
    }
}