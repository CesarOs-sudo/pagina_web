<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('pantallas/home');
})->name('home');


//Route::get('productos', function () {
//    return view('pantallas/productos');
//});

//Route::resource('users', UserController::class)->only(['index']);
//controlador resourse para generar url senecesita {{url('user')}}
Route::resource('user', UserController::class);
//get y renombrado para obtener url se necesita {{resource('porfile')}}
Route::get('user/profile', [UserController::class, 'index'])->name('profile');


//Route::get('/user', [UserController::class, 'index']);

Route::get('/post/{post}', function () {
    //
})->name('post.show');