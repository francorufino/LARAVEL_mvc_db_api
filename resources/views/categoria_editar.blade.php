<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      @if ($errors->count())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $erro)
            <li>{{$erro}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <br><h1>Editar Categoria</h1><br>
      <form action="/categoria/editar/{{ $categoria->categoria_id }}" method="post">
        @csrf
        {{--  ou {{csrf_field}} --}}


        {{method_field('PUT')}}
        {{-- ou @method('PUT')--}}


        <label>Nome de Categoria:</label>
        <input type="text" name="nome" value="{{$categoria->nome}}">
        <button type="submit">Confirmar</button>
      </form>
  </div>
  </body>
</html>
