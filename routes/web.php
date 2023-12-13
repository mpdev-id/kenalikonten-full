<?php


use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

Route::name('index.')->prefix('/')->group(function() {
 route::post('/',[FrontEndController::class,'upload'])->name('upload');
 route::get('/',[FrontEndController::class,'index'])->name('home');
 route::get('/validasi',[FrontEndController::class,'valid'])->name('valid');
 route::get('/donatur',[FrontEndController::class,'donatur'])->name('donatur');
 route::get('/content/{id}',[FrontEndController::class,'content'])->name('content');
 route::get('/tim-kami',[FrontEndController::class,'team'])->name('team');
});

