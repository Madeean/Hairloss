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
    $penyakitYangDiderita=[];
    $presentaseKelK01=0;
    $presentaseKelK02=0;
    $presentaseKelK03=0;
    $presentaseKelK04=0;
    $presentaseKelK05=0;
    return view('welcome',compact('penyakitYangDiderita','presentaseKelK01','presentaseKelK02','presentaseKelK03','presentaseKelK04','presentaseKelK05'));
});
Route::post('/', [KemungkinanController::class, 'cekKemungkinan']);
