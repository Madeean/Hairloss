<?php

use App\Http\Controllers\KemungkinanController;
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
Route::post('/', [KemungkinanController::class, 'cekKemungkinan']);

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/about-us',function(){
    return view('aboutus');
});
