
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário Nova Categoria</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

<h1>Idioma</h1>

<p>{{ $idioma->nome }}</p>
<p>{{ $idioma->ultima_atualizacao->format('d/m/Y') }}</p>

<ul>
@foreach ($idioma->filmes as $filme)
<li>
{{$filme->titulo}}

</li>
@endforeach
</ul>
  </body>
</html>
