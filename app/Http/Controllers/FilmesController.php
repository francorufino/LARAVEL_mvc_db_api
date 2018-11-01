<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// aula 36 de 15/10/2018
use App\Filme;

class FilmesController extends Controller
{

  public function procurarFilmeId($id) {
    $filme = Filme::find($id);
    return view('filme')
    ->with ('nomeFilme', $filme->titulo);

    // public function procurarFilmeId($id) {
    //   $filmes = [
    //     1 => "Toy Story",
    //     2 => "Procurando o Nemo",
    //     3 => "Avatar",
    //     4 => "Star Wars: Episódio V",
    //     5 => "Up",
    //     6 => "Mary e Max"
    //   ];
      // return $filmes[$id];
      // ou, usando uma view, conforme abaixo:
      // return view('filme')
      // ->with ('nomeFilme', $filmes[$id]);

    }



    public function procurarFilmeNome($nome) {
      $filmes = [
        1 => "Toy Story",
        2 => "Procurando o Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
      ];

      $resultado = 'Nenhum resultado encontrado!';
      foreach ($filmes as $key => $value) {
        if ($nome == $value) {
          $resultado = $key . ' - ' . $value;
        break;
        }
      }
      // return $resultado;
      // ou, usando uma view, conforme abaixo:
      return view('filme')
        ->with('nomeFilme', $resultado);
    }



// aula 35 de 10/10/2018
    // public function mostrarTodosOsFilmes() {
    //   $filmes = [
    //     1 => "Toy Story",
    //     2 => "Procurando o Nemo",
    //     3 => "Avatar",
    //     4 => "Star Wars: Episódio V",
    //     5 => "Up",
    //     6 => "Mary e Max"
    //   ];
    //   return view('filmes')
    //   ->with('listaDeFilmes', $filmes);
    // }


// aula 36 de 15/10/2018
    public function mostrarTodosOsFilmes() {
      $filmes = Filme::PAGINATE(5);
      // $filmes = Filme::orderBy('titulo', 'desc')->get();
      // $filmes = Filme::where('titulo', '=', 'ZORRO ARK')->get();
      // $filmes = Filme::where('titulo', 'like', 'al%')->get();
      // $filmes = Filme::where('titulo', 'like', 'al%')
      //   ->orderBy('titulo', 'desc')
      //   ->get();

      return view('filmes')
      ->with('listaDeFilmes', $filmes);
    }
}
