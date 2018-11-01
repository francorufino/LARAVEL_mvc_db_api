// aula 36 de 15/10/2018

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listagem de Filmes</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <h2>Listagem de Filmes</h2>
    <table>
      <thead>
        <tr>
          <th>TÍTULO</th>
          <th>ANO</th>
          <th>DURAÇÃO</th>
          <th>IDIOMA</th>
        </tr>
      </thead>
    @foreach ($listaDeFilmes as $filme)
      <tr>
        <td>{{$filme->titulo}}</td>
        <td>{{$filme->ano_de_lancamento}}</td>
        <td>{{$filme->duracao_do_filme}}</td>
        <td>{{$filme->idioma->nome}}</td>
      </tr>
    @endforeach
  </table>

  </body>
</html>
