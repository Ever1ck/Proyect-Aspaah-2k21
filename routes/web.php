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

Route::get('socios/pdf', [App\Http\Controllers\SocioController::class, 'pdf'])->name('socios.pdf');
    Route::get('socios/excel', [App\Http\Controllers\SocioController::class, 'excel'])->name('socios.excel');
    Route::get('socios/pdfCarnets', [App\Http\Controllers\SocioController::class, 'pdfCarnets'])->name('socios.pdfCarnets');
    Route::get('socios/pdfCarnet/{id}', [App\Http\Controllers\SocioController::class, 'pdfCarnet'])->name('socios.pdfCarnet');
    Route::resource('socios', App\Http\Controllers\SocioController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
    
    //Route::get('/socios',Socios::class);
    Route::resource('socios','App\Http\Controllers\SocioController');
    Route::resource('personas','App\Http\Controllers\PersonaController');
    Route::resource('maquinarias','App\Http\Controllers\MaquinariaController');

    Route::view('selects','selects');

    Route::get('/socios/provinciasByDep/{id}','App\Http\Controllers\SocioController@provinciasByDep');
    Route::get('/socios/distritosByProv/{id}','App\Http\Controllers\SocioController@distritosByProv');

    
