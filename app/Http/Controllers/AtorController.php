<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtorController extends Controller
{

  public function index() {
    // $atores = Ator::all();
    // $atores = Ator::filmes->where('idioma_id', '=', '2')->get();

    $atores = Ator::where('ultimo-nome', 'like', '%a%')
    ->orWhere ('ultimo-nome', 'like', '%b%')
    ->orderBy('primeiro_nome')

    ->get();
    return view('atores')
    ->with('listaDeAtores', $atores);
  }

    public function show($id) {
      $ator = Ator::find($id);
      return view('ator')
      ->with ('nomeAtor', $ator);
  }

// --------------------------------------------------------------
// CRUD DE ATORES

  public function exibir() {
    $atores = Ator::where ('ultimo_nome', 'like', 'a%')
    ->orwhere ('ultimo_nome','like','b%')
    ->inRandomOrder()
    ->paginate(5);

    return view('ator_todas')->with('listaDeAtores',$atores);
  }

  public function novo() {
    return view('ator_adicionar');
  }

  public function adicionar(Request $request) {
    $request->validate([
      'primeiro_nome' => 'required|max:30',
      'ultimo_nome' => 'required|max:30'
    ]);
    $ator = Ator::create([
      'primeiro_nome' => $request->input('primeiro_nome'),
      'ultimo_nome' => $request->input('ultimo_nome'),
    ]);
    $ator->save();
    return redirect('/ator/exibir');
  }






  public function editar($id) {
    $ator = Ator::find($id);
    return view('ator_editar')->with('ator', $ator);
  }

  public function receberAlteracoes(Request $request, $id){
    $request->validate([
      'nome' => 'required|min:2|max:20|unique:categoria'
    ]);

    $ator = Ator::find($id);
    $ator->nome=$request->input('nome');
    $ator->save();
    return redirect('/categoria/exibir');
  }

  public function excluir($id){
    $ator = Ator::find($id);
    return view('ator_excluir')->with('ator', $ator);
  }

  public function excluirAtor($id){
    $ator = Ator::find($id);
    $ator->delete();
    return redirect('/ator/exibir');
  }




}
