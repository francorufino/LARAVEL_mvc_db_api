<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ator</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h2>
    {{$nomeAtor->getNomeCompleto()}}
  </h2>

  <ul>
    @foreach ($nomeAtor->filmesEAtores as $filme)

    <li> {{ $filme->titulo }} {{ $filme->idioma->nome }} </li>

@endforeach



  </body>
</html>
