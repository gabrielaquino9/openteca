<?php

use App\Http\Controllers\livroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/home',[UsuarioController::class, 'homeView']);
Route::get('/login', [UsuarioController::class, 'loginView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/minha-conta', [UsuarioController::class, 'contaView']);

Route::get('/pesquisa-livros', [LivroController::class, 'pesquisaView']);
Route::get('/info-livros', [LivroController::class, 'infoView']);
Route::get('/meus-livros', [LivroController::class, 'meusView']);

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

Route::get('/', function () {
    return view('welcome');
});