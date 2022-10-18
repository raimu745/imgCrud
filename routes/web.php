<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('form',[CrudController::class,'index']);
Route::post('store',[CrudController::class,'store']);
Route::get('table',[CrudController::class,'show']);
Route::get('edit/{id}',[CrudController::class,'edit']);
Route::post('update/{id}',[CrudController::class,'update']);
Route::get('delete/{id}',[CrudController::class,'delete']);
