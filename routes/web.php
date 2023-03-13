<?php

use App\Http\Controllers\aadmincontroller;
use App\Http\Controllers\amasyarakatcontroller;
use App\Http\Controllers\pertanyaancontroller;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
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
    return view('welcome2');
});

Route::get('aadmin',[aadmincontroller::class,'index']);
Route::get('amasyarakat',[amasyarakatcontroller::class,'index']);
Route::get('pertanyaan',[pertanyaancontroller::class,'index']);

//Kelola Jawaban Kuisioner
Route::get('jawaban',[JawabanController::class,'index']);
Route::get('/Tambah', [JawabanController::class, 'JawabanController@create']);

//Akhir Kelola Jawaban Kuisioner
Route::get('login',[logincontroller::class,'index']);
Route::post('login',[logincontroller::class,'login']);
Route::get('register',[registercontroller::class,'index']);
Route::post('register',[registercontroller::class,'daftar']);

