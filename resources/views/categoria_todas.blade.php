<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Categorias</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <br>
    <div class="container">

      <h1>Lista de Categorias</h1><br>

      <h5><a href="/categoria/adicionar">Incluir Nova Categoria</a></h5>

      <table class="table">
        <tr>
          <th>ID</th>
          <th>CATEGORIA</th>
          <th>ATUALIZAÇÃO</th>
          <th>EDITAR</th>
          <th>EXCLUIR</th>
        </tr>
        @foreach ($listaDeCategorias as $categoria)

          <tr>
          <td>{{$categoria->categoria_id}}</td>
          <td>{{$categoria->nome}}</td>
          <td>{{$categoria->ultima_atualizacao}}</td>
          <td><a class="btn btn-primary" href="/categoria/editar/{{ $categoria->categoria_id }}">Editar</a></td>
          <td><a class="btn btn-danger" href="/categoria/excluir/{{ $categoria->categoria_id }}">Excluir</a></td>
        </tr>
        @endforeach
      </table>

{{--<!-- aqui na linha 45 eh onde fazemos os numeros na pagina mostrando os numeros das outras paginas de carregamento, ele mesmo calcula sozinho --}}
    {{--  <!-- UTILIZANDO FORMATAÇÃO COM UL E LI -->
      <!-- <ul class='list-group'>
      @foreach ($listaDeCategorias as $categoria)
        <li class='list-group-item'>{{$categoria->categoria_id}} - {{$categoria->nome}} ({{$categoria->ultima_atualizacao}})</li>
      @endforeach
    </ul> -->--}}

    
{{$listaDeCategorias->links()}}
    </div>

  </body>
</html>
