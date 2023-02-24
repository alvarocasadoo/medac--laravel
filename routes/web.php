<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/contacto', function () {
    return view('contacto');
});


// Route::get('/contacto', [ContactoController::class, 'index']);
// Route::post('/contacto', [ContactoController::class, 'store']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/misReservas', [ReservasController::class, 'showall'])->middleware('auth');



Route::get('/login', [LoginController::class, 'index']);
Route::get('/registrar', [RegisterController::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::delete('eliminar/{id}', [ReservasController::class, 'eliminarReservas'])->name('reserva.delete');

Route::post('/reserva', [ReservasController::class, 'recogerTodo']);

Route::post('/reservaIN', [ReservasController::class, 'storeinvitado']);

Route::post('/reservar', [ReservasController::class, 'store']);

Route::get('/fullcalender', [ReservasController::class, 'Evento']);

Route::GET('/fullcalenderajax', [ReservasController::class, 'Eventoajax']);



