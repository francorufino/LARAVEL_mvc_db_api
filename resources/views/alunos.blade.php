<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Alunos</title>
  </head>
  <body>
    <h1>Todos os Alunos</h1>

    @foreach ($alunos as $aluno)
    <p>{{$aluno}}</p>
    @endforeach

  </body>
</html>
