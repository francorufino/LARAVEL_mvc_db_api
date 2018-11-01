<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Excluir Categoria</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">


      <br><h1>Excluir Categoria</h1><br>
      <form action="/categoria/excluir/{{ $categoria->categoria_id }}" method="post">
        @csrf
        {{--  ou {{csrf_field}} --}}


        {{method_field('DELETE')}}
        {{-- ou @method('DELETE')--}}


        <label>Nome de Categoria:</label>
        <input type="text" name="nome" value="{{$categoria->nome}}" readonly>
        <button type="submit" onclick="return confirm('Deseja mesmo excluir?');">Excluir</button>
      </form>
  </div>
  </body>
</html>
