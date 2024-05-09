<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect']);

Route::get('/add_doctor_view', [AdminController::class,'addview']);

Route::post('/upload_doctor', [AdminController::class,'upload']);

Route::post('/appointement', [HomeController::class,'appointement']);

Route::get('/myappointement', [HomeController::class,'myappointement']);

Route::get('/delete_appoint/{id}', [HomeController::class,'deleteapp']);
 
Route::get('/showappointements', [AdminController::class,'show_appointement']);

Route::get('/showdoctors', [AdminController::class,'show_doctors']);
 
Route::get('/approved/{id}', [AdminController::class,'approved']);

Route::get('/canceled/{id}', [AdminController::class,'canceled']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
