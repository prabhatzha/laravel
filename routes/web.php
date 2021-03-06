<?php

use App\Http\Controllers\HtmlController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\loops;


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

Route::view('prabhat','prabhat');


Route::get('m', [NewController::class, 'show']);

Route::get("pkj", [loops::class, 'loadloops']);

Route::view('html', 'htmlview');
Route::post("htmlform",[HtmlController::class, 'getdata']);

Route::get("database",[HtmlController::class, 'prabhat']);

Route::get("model",[HtmlController::class, 'getall']);
Route::get("model2",[HtmlController::class, 'getall2']);