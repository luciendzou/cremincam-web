<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlineBankController;
use App\Http\Controllers\ParticuliersController;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home');
    Route::get('/a-propos-de-nous', 'about');
    Route::get('/histoire', 'histoire');
    Route::get('/agences', 'agences');
    Route::get('/carrières', 'carriere');
    Route::get('/actualités', 'actu');
    Route::get('/nous-contacter', 'contacts');
    Route::get('/{name}/{id}','actuDetails');
});

Route::controller(ParticuliersController::class)->group(function(){
    Route::get('/particulier', 'homepage');
});


Route::controller(OnlineBankController::class)->group(function(){
    Route::get('/register', 'register');
    Route::post('/newsletters', 'newsletters');
});



Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'adminHome');
    Route::get('/addpub', 'addPub');
    Route::post('/addingpub', 'adding');
});
