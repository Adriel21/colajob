<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home');
})->name('home');

Route::get('/entrar', function () {
    return view('login');
});

Route::post('/entrar', [LoginController::class, 'authenticate'])->middleware('guest')->name('login');


Route::get('/cadastrar', function () {
    return view('register');
});


Route::post('/cadastrar', [UserController::class, 'store']);


Route::middleware(['auth'])->group(function () {
    // Rotas protegidas por autenticação
    Route::get('/painel-cliente', function () {
        return view('clientdashboard');
    });
    Route::get('/painel-profissional', 'ProfileController@index')->name('profissional.dashboard');
    // Outras rotas protegidas...
});

