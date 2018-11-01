<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Atores</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <br>
    <h1>Lista de Atores (data última atualização)</h1><br> -->
    @extends ('layouts.app')

    @section ('content')
    <ul class='list-group'>
    @foreach ($listaDeAtores as $ator)
    <a href="ator/{{$ator->ator_id}}">
      <li class='list-group-item'>{{$ator->getNomeCompleto() .' '. '('.$ator->ultima_atualizacao.')'}}</li>
    </a>
    @endforeach

  </ul>
  @endsection
<!--
  </body>
</html> -->
