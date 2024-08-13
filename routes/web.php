<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/form", [Formislemleri::class, 'gorunum']);
Route::get("/customers", [CustomerController::class, 'customers']);


Route::middleware('arakontrol')->post("/form-sonuc", [Formislemleri::class, 'sonuc'])->name('sonuc');
