<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Excluir Ator</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">


      <br><h1>Excluir Ator</h1><br>
      <form action="/ator/excluir/{{ $ator->ator_id }}" method="post">
        @csrf
        {{--  ou {{csrf_field}} --}}


        {{method_field('DELETE')}}
        {{-- ou @method('DELETE')--}}


        <label>Nome de Ator:</label>
        <input type="text" name="nome" value="{{$ator->nome}}" readonly>
        <button type="submit" onclick="return confirm('Deseja mesmo excluir?');">Excluir</button>
      </form>
  </div>
  </body>
</html>
