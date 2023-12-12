<?php


use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;


route::post('/',[FrontEndController::class,'upload'])->name('upload');
route::get('/',[FrontEndController::class,'index'])->name('index');
route::get('/validasi',[FrontEndController::class,'valid'])->name('valid');
route::get('/donatur',[FrontEndController::class,'donatur'])->name('donatur');
route::get('/content',[FrontEndController::class,'content'])->name('content');
route::get('/tim-kami',[FrontEndController::class,'team'])->name('team');

