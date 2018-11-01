<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{

    public function exibir() {
      $categorias = Categoria::orderBy('nome')->paginate(3);
      return view('categoria_todas')->with('listaDeCategorias',$categorias);
    }

    

{{--  esse desc abaixo significa q a ordem eh decrescente, de Z a Z:
      public function exibir() {
        $categorias = Categoria::orderBy('nome', 'desc')->paginate(3);
        return view('categoria_todas')->with('listaDeCategorias',$categorias);
      }
      --}}

    public function novo() {
      return view('categoria_adicionar');
    }

    public function adicionar(Request $request) {
      $request->validate([
        'nome' => 'required|unique:categoria|max:30'
      ]);
      $categoria = Categoria::create([
        'nome' => $request->input('nome')
      ]);
      $categoria->save();
      return redirect('/categoria/exibir');
    }


public function editar($id) {
  $categoria = Categoria::find($id);
  return view('categoria_editar')->with('categoria', $categoria);
}

public function receberAlteracoes(Request $request, $id){
  $request->validate([
    'nome' => 'required|min:2|max:20|unique:categoria'
  ]);

  $categoria = Categoria::find($id);
  $categoria->nome=$request->input('nome');
  $categoria->save();
  return redirect('/categoria/exibir');
}

public function excluir($id){
  $categoria = Categoria::find($id);
  return view('categoria_excluir')->with('categoria', $categoria);
}

public function excluirCategoria($id){
  $categoria = Categoria::find($id);
  $categoria->delete();
  return redirect('/categoria/exibir');
}
}
