<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\TipoController;

use App\Models\Imovel;
use App\Models\Endereco;
use App\Models\Foto;
use App\Models\Tipo;

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

Route::resource('imovels',ImovelController::class);
Route::resource('enderecos',EnderecoController::class);
Route::resource('tipos',TipoController::class);