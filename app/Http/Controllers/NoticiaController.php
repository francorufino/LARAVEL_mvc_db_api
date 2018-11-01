<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
public function nytimes(){

$noticias = file_get_contents("https://api.nytimes.com/svc/topstories/v2/home.json?api-key=9502f2de0b2d4369bb6ae9873ed79ecd");
$noticias = json_decode($noticias, true);

// para ver o q a api retorna:
// dd($noticias);

return view('noticias')->with('listaDeNoticias', $noticias['results']);

}
}
