<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
  public function mostrarAlunos() {
    $alunos = [
      ['nome' =>'Ana', 'idade'=>12],
      ['nome' =>'Ze', 'idade'=>20],
      ['nome' =>'Joao', 'idade'=>30]

    ];

    $colecao = collect($alunos);

    $colecao = $colecao->sort();

  // {{--}}  $colecao = $colecao->pop();
  // {{--}} $colecao = $colecao->pluck('nome'); o pluck ele extrai da array soh o q eu defini.

    return view('alunos')
      ->with('alunos', $colecao);
  }
}
