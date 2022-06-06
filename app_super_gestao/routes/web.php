<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return 'Olá, seja bem-vindo ao curso';
// });

// Route::get('contato/{nome}/{categoria}/{assunto}/{mensagem?}', 
//     function(string $nome, string $categoria, string $assunto, string $mensagem = 'Mensagem não informada') {
//         echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
//     });

// Route::get('contato/{nome}/{categoria_id}', 
//     function(string $nome = 'Desconhecido',
//                 int $categoria_id = 1) {
//         echo "Estamos aqui: $nome - $categoria_id";
//     })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});


