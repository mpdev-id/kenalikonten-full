<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::name('index.')->middleware('guest')->prefix('/')->group(function() {
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

route::name('dashboard.')->prefix('dashboard')->group(function(){

   route::get('/',[DashboardController::class,'index'])->name('home');
   
   route::name('konten-masuk.')->prefix('konten-masuk')->group(function(){
    route::get('/',[IssueController::class,'index'])->name('index');
    Route::post('/update/{id}', [IssueController::class, 'update'])->name('update');
    Route::get('/reply', [IssueController::class, 'reply'])->name('reply');
    Route::get('/reply/{slug}', [IssueController::class, 'editReply'])->name('editReply');
    Route::post('/sendReply', [IssueController::class, 'sendReply'])->name('sendReply');

  });

   route::name('jenis-tim.')->prefix('jenis-tim')->group(function(){
     route::post('/delete/{id}', [TeamController::class,'delete'])->name('delete');
     route::get('/{id}', [TeamController::class,'edit'])->name('edit');
     route::get('/',[TeamController::class,'index'])->name('index');
     route::post('/',[TeamController::class,'create'])->name('create');
     //  route::get('/{$id}/delete',[TeamController::class,'delete'])->name('delete');
    });

    route::name('anggota-tim.')->prefix('anggota-tim')->group(function(){
      route::delete('/delete/{id}', [MemberController::class,'delete'])->name('delete');
      route::get('/',[MemberController::class,'index'])->name('index');
      route::get('/{id}', [MemberController::class,'edit'])->name('edit');
      route::post('/',[MemberController::class,'create'])->name('create');
    });
    
    route::name('loker-tim.')->prefix('loker-tim')->group(function(){
      // route::get('/',[LokerController::class,'index'])->name('index');
      route::delete('/delete/{id}', [LokerController::class,'delete'])->name('delete');
      route::get('/',[LokerController::class,'index'])->name('index');
      route::get('/{id}', [LokerController::class,'edit'])->name('edit');
      route::post('/',[LokerController::class,'create'])->name('create');
    });
    
    route::name('donatur.')->prefix('donatur')->group(function(){
      route::delete('/delete/{id}', [DonaturController::class,'delete'])->name('delete');
      route::get('/',[DonaturController::class,'index'])->name('index');
      route::get('/{id}', [DonaturController::class,'edit'])->name('edit');
      route::post('/',[DonaturController::class,'create'])->name('create');
    });
    
    route::name('post.')->prefix('konten-post')->group(function(){
      route::get('/',[ContentController::class,'index'])->name('index');
      route::delete('/delete/{id}', [ContentController::class,'delete'])->name('delete');
      route::post('/status/{id}', [ContentController::class,'status'])->name('status');
      // route::get('/',[ContentController::class,'index'])->name('index');
      route::get('/{id}', [ContentController::class,'edit'])->name('edit');
      route::post('/',[ContentController::class,'create'])->name('create');
  });

});

