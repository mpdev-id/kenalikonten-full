<?php


use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

Route::name('index.')->prefix('/')->group(function() {
 route::post('/',[FrontEndController::class,'upload'])->name('upload');
 route::get('/',[FrontEndController::class,'index'])->name('home');
 // list valid
 // Route::get('/get-more-validations',[FrontEndController::class,'getMoreValidations']);
 route::get('/validasi',[FrontEndController::class,'valid'])->name('valid');
 Route::get('/validasi/load-more', [FrontEndController::class, 'loadMoreValidations'])->name('valid.load-more');
 route::get('/content/{id}',[FrontEndController::class,'content'])->name('content');
 Route::get('/cari-validasi', [FrontEndController::class, 'cariValidasi'])->name('valid.cari-validasi');

 
 route::get('/donatur',[FrontEndController::class,'donatur'])->name('donatur');
 route::get('/tim-kami',[FrontEndController::class,'team'])->name('team');
});

