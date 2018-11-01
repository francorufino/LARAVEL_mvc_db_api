<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário Nova Categoria</title>
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

      <br><h1>Adicionar Categoria</h1><br>
      <form action="/categoria/adicionar" method="post">
        @csrf
        {{--  ou {{csrf_field}} --}}


        {{method_field('POST')}}
        {{-- ou @method('POST')--}}

        <label>Nome de Categoria:</label>
        <input type="text" name="nome" value="">
        <button type="submit">Adicionar</button>
      </form>
  </div>
  </body>
</html>
