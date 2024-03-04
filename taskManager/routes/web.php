<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// localhost:8000/

Route::get('/', function () {
    //helper
    return view('welcome');
});

Route::get('/tarefas', function () {

    $nome = "Gerson Lima";

    return view('tarefa/home', ['nome' => $nome]);
})->name('tarefa.início');

Route::get('/tarefas/criar', function () {
    //nomear rotas para chamar a view de criar tarefas na home
    return view('tarefa/create');
})->name('tarefa.criar');

Route::post('/tarefas/salvar', function (Request $request) {

    $nome = $request->post('nome');
    $descricao = $request->post('descricao');

    //sobre a requisição post:
    //processar alguma coisa
    //salvar no banco de dados
    return $nome . ":" . $descricao;
})->name('tarefa.salvar');

Route::get('/tarefas/mostrar/{id}', function ($id) {
    return "Mostrando a tarefa: " . $id;
});