<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// AULA 34 - 08/10/2018

// Exercícios durante a aula
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato1/{texto?}', function ($texto = 'nenhum nome digitado') {
    return "<h1>Contato da Empresa: " . $texto . "</h1>";
});

Route::get('/contato2/{nome}/{sobrenome}', function ($nome, $sobrenome) {
    return "<h1>Contato da Empresa: " . $nome . " ". $sobrenome . "</h1>";
});


// Exercício 2a
Route::get('/meuPrimeiroCaminho', function () {
    return "<h1>Criei meu primeiro caminho em Laravel</h1>";
});

// Exercício 2b
Route::get('/resultado/{numero}', function ($numero) {
    if ($numero % 2 == 0) {
    return "<h1>O número ".$numero. " é par!"."</h1>";
    }
    return "<h1>O número ".$numero. " é ímpar!"."</h1>";
});

// Exercício 2c
Route::get('/resultado2/{num1}/{num2?}', function ($num1, $num2=null) {
    if ($num2 !== null) {
      return $num1 * $num2;
    } else {
    if ($num1 % 2 == 0) {
    return "<h1>O número ".$num1. " é par!"."</h1>";
    }
    return "<h1>O número ".$num1. " é ímpar!"."</h1>";
  }
});


// AULA 35 - 10/10/2018

Route::get('/alunos', 'AlunosController@mostrarAlunos');


// Exercício 1a e b - aula 35
Route::get('/filmes/{id}', 'FilmesController@procurarFilmeId');

// Exercício 1c - aula 35
Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarFilmeNome');

// Exercício 2 - aula 35
Route::get('/filmes', 'FilmesController@mostrarTodosOsFilmes');

// Exercício 3 - aula 37 - 17/10/2018
Route::get('/atores', 'AtorController@index')->middleware('auth');
Route::get('/ator/exibir/{id}', 'AtorController@show');


// CRIAÇÃO DO CRUD (19/10/2018)

// CRUD DE CATEGORIAS
  // Essa rota exibe as categorias cadastradas no banco:
Route::get('/categoria/exibir', 'CategoriaController@exibir');
  // Essa rota exibe o formulário de inclusão de CATEGORIAS:
Route::get('/categoria/adicionar', 'CategoriaController@novo');
  // Essa rota recebe os dados inseridos via formulário:
Route::post('/categoria/adicionar', 'CategoriaController@adicionar');

Route::get('/categoria/editar/{id}', 'CategoriaController@editar');
Route::put('/categoria/editar/{id}', 'CategoriaController@receberAlteracoes');

Route::get('/categoria/excluir/{id}', 'CategoriaController@excluir');
Route::delete('/categoria/excluir/{id}', 'CategoriaController@excluirCategoria');

// CRUD de ATORES
  // Essa rota exibe os ATORES cadastrados no banco:
Route::get('/ator/exibir', 'AtorController@exibir');
  // Essa rota exibe o formulário de inclusão de ATORES:
Route::get('/ator/adicionar', 'AtorController@novo');
  // Essa rota recebe os dados inseridos via formulário:
Route::post('/ator/adicionar', 'AtorController@adicionar');

Route::get('/ator/editar/{id}', 'AtorController@editar');
Route::put('/ator/editar/{id}', 'AtorController@receberAlteracoes');

Route::get('/ator/excluir/{id}', 'AtorController@excluir');
Route::delete('/ator/excluir/{id}', 'AtorController@excluirAtor');

Route::get('/idioma/{id}', 'IdiomaController@exibir');
// aqui:
// get eh pra exibir as infos do form
// post eh pra receber as infos do form



// Para fazer sua API e disponibilizar p os outros
// get -> consultar
// post -> inclusao
// put -> alteracao
// delete -> exclusao

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/noticias', 'NoticiaController@nytimes');
