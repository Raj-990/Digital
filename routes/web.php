<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\NewproductController;
use App\Http\Controllers\loginController;

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

Route::view("user","login");
Route::post("post",[loginController::class,'loginshow']);



// Route::resource('products' ,NewproductController::class);
