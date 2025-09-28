<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;
use  App\Http\Controllers\ProductController;


Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/comitment', [PageController::class,'OurCommitment']);
Route::get('/UpcomingEvents', [PageController::class,'upCommingEvent']);
Route::get('/tachnicalSupport', [PageController::class,'tachnicalSupport']);
Route::get('/ClinicalSupport', [PageController::class,'ClinicalSupport']);
Route::get('/news', [PageController::class,'news']);
Route::get('/productUpdate', [PageController::class,'productUpdate']);
Route::get('/products', [PageController::class,'products']);
Route::get('/products/stationarySystems', [PageController::class,'stationarysystems']);
Route::get('/products/mobilesystems', [PageController::class,'mobilesystems']);
Route::get('/products', [PageController::class,'products']);
Route::get('/products', [PageController::class,'products']);
Route::get('/products', [PageController::class,'products']);





// dashboard page 

Route::get('/uplodProduct/1234/dashboard', [PageController::class,'dashboard']);


Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


