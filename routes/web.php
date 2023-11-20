<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
})->middleware('guest');

Route::get('/cadastrar', function () {
    return view('register');
})->middleware('guest');

Route::post('/entrar', [LoginController::class, 'authenticate'])->middleware('guest')->name('login');

Route::post('/cadastrar', [UserController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/painel-cliente', [DashboardController::class, 'index']);
    Route::get('/painel-cliente/cadastrar-perfil-freelancer', [DashboardController::class, 'openFreelancerRegistrationForm']);
    Route::get('/painel-profissional', 'ProfileController@index')->name('profissional.dashboard');
    Route::get('/sair', [LoginController::class, 'logout']);
});

