<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário Novo Ator</title>
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

      <br><h1>Adicionar Ator</h1><br>
      <form action="/ator/adicionar" method="post">
        @csrf
        <label>Nome:</label>
          <input type="text" name="primeiro_nome" value="">
        <label>Sobrenome:</label>
          <input type="text" name="ultimo_nome" value="">
        <button type="submit">Adicionar</button>
      </form>
  </div>
  </body>
</html>
