@extends('layouts.app')

@section('content')


<ul>
  @foreach($listaDeNoticias as $noticia)
  <li>
    <img src="{{$noticia['multimedia'][0]['url']??''}}">
    <p>Titulo: {{$noticia['title']}}</p>
    <p>Autor: {{$noticia['byline']}}</p>
    <p><a href="{{$noticia['url']}}">Clique aqui para ver a noticia</a></p>
  </li>
  @endforeach

</ul>



@endsection
