<?php

use Illuminate\Support\Facades\Route;
use JeroenNoten\LaravelAdminLte\Components\Form\Select;

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

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
    
    //Route::get('/socios',Socios::class);
    Route::resource('socios','App\Http\Controllers\SocioController');
    Route::resource('personas','App\Http\Controllers\PersonaController');

    Route::view('selects','selects');