<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonelController;


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


Route::get("/",[PersonelController::class,'index'])->name('personel.index');
Route::get("/ekle",[PersonelController::class,'create'])->name('personel.create');
Route::post("/ekle",[PersonelController::class,'store'])->name('personel.store');
Route::get("/{id}",[PersonelController::class,'edit'])->name('personel.edit');
Route::post("/{id}",[PersonelController::class,'update'])->name('personel.update');
Route::get("/sil/{id}",[PersonelController::class,'delete'])->name('personel.delete');




