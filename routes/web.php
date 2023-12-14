<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TeamController;
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

route::name('dashboard.')->prefix('dashboard')->group(function(){

   route::get('/',[DashboardController::class,'index'])->name('home');
   
   route::name('konten-masuk')->prefix('konten-masuk')->group(function(){
    route::get('/',[IssueController::class,'index']);
  });
   route::name('jenis-tim.')->prefix('jenis-tim')->group(function(){
     route::post('/',[TeamController::class,'create'])->name('create');
     Route::delete('/{id}', 'TeamController@destroy')->name('dashboard.jenis-tim.delete');
     route::get('/',[TeamController::class,'index'])->name('index');
     route::get('/{$id}/delete',[TeamController::class,'delete'])->name('delete');
  });
   route::name('anggota-tim')->prefix('anggota-tim')->group(function(){
    route::get('/',[MemberController::class,'index']);
  });
   route::name('loker-tim')->prefix('loker-tim')->group(function(){
    route::get('/',[LokerController::class,'index']);
  });

});

