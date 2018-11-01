<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idioma;

class IdiomaController extends Controller
{
    public function exibir($id){
      $idioma = Idioma::find($id);
      return view('idioma_exibir')->with('idioma', $idioma);
    }
}
