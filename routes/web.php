<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// cronjob
// /usr/bin/ln -sf /home/kenh4992/kenalikonten.com/public/img /home/kenh4992/public_html
// /usr/bin/ln -sf /home/kenh4992/kenalikonten-full/public/img /home/kenh4992/public_html/dev


Route::get('/cleans', function () {
  // Reoptimized class loader:
  // Artisan::call('optimize');
  // Artisan::call('route:clear');
  // Artisan::call('cache:clear');
  Artisan::call('route:cache');
  // Artisan::call('view:clear');
  // Artisan::call('config:clear');
  return redirect()->route('index.home');
  // return 'Application cache has been cleared';
});
Route::get('/storage-link',function(){
  Artisan::call('storage:link');
});

Route::get('/storage-link2',function(){
$target = base_path().'/storage/app/public';
$linkfolder=$_SERVER['DOCUMENT_ROOT'].'/storage';
symlink($target,$linkfolder); 
});

Route::name('index.')->prefix('/')->middleware(['redirectIfNotFound'])->group(function() {
 route::post('/',[FrontEndController::class,'upload'])->name('upload');
 route::get('/',[FrontEndController::class,'index'])->name('home');
 // list valid
 // Route::get('/get-more-validations',[FrontEndController::class,'getMoreValidations']);
 Route::get('/content', function () {
  Artisan::call('route:cache');
  return redirect()->route('index.content');
});
 route::get('/validasi',[FrontEndController::class,'valid'])->name('valid');
 Route::get('/validasi/load-more', [FrontEndController::class, 'loadMoreValidations'])->name('valid.load-more');
 route::get('/content/{id}',[FrontEndController::class,'content'])->name('content');
 Route::get('/cari-validasi', [FrontEndController::class, 'cariValidasi'])->name('valid.cari-validasi');
 route::get('/donatur',[FrontEndController::class,'donatur'])->name('donatur');
 route::get('/tim-kami',[FrontEndController::class,'team'])->name('team');
 
 route::get('/aks354dm!n',[LoginController::class,'login'])->name('login')->middleware('guest');
 route::post('/aks354dm!n',[LoginController::class,'loginAuth'])->name('login.auth')->middleware('guest');
 
});

route::name('dashboard.')->prefix('d45h804rd')->middleware('auth')->group(function(){

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

