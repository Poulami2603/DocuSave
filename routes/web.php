<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocuSaveController;
use App\Http\Controllers\UserDataController;

Route::get('/edit', function (){
    return view('edit');
});

Route::get('/search', function(){
    return view('search');
});

Route::get('/home', function (){
    return view('admin.admindashboard');
});

Route::get('/', [DocuSaveController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [DocuSaveController::class,'registration'])->middleware('alreadyLoggedIn'); 
Route::post('/register-user', [DocuSaveController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [DocuSaveController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [DocuSaveController::class, 'logout']);

Route::get('/dashboard', [UserDataController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/upload', [UserDataController::class, 'upload']);
Route::post('/store_data', [UserDataController::class, 'store_data']);
