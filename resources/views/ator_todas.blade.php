<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Atores</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <br>
    <div class="container">

      <h1>Lista de Atores</h1><br>

      <a href="/ator/adicionar">Incluir Novo Ator</a>

      <table class="table">
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>SOBRENOME</th>
          <th>ATUALIZAÇÃO</th>
        </tr>
        @foreach ($listaDeAtores as $ator)
          <tr>
          <td>{{$ator->ator_id}}</td>
          <td>{{$ator->primeiro_nome}}</td>
          <td>{{$ator->ultimo_nome}}</td>
          <td>{{$ator->ultima_atualizacao}}</td>
        </tr>
        @endforeach
      </table>
      {{$listaDeAtores->links()}}

    </div>

  </body>
</html>
