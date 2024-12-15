<?php

use App\Http\Controllers\HqmSinhVienController;
use Illuminate\Support\Facades\Route;

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

#SInhvien - model
Route::get('/hqm-sinhviens',[HqmSinhVienController::class,'hqmList'])->name('hqmSinhVien.hqmList');
Route::get('/hqm-sinhviens/create',[HqmSinhVienController::class,'hqmCreate'])->name('hqmSinhVien.hqmCreate');
Route::post('/hqm-sinhviens/create',[HqmSinhVienController::class,'hqmCreateSubmit'])->name('hqmSinhVien.hqmCreateSubmit');


