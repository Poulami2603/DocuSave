<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocuSaveController;


Route::get('/upload', function () {
    return view('upload');
});

Route::get('/edit', function (){
    return view('edit');
});

Route::get('/search', function(){
    return view('search');
});

Route::get('/', [DocuSaveController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [DocuSaveController::class,'registration'])->middleware('alreadyLoggedIn'); 
Route::post('/register-user', [DocuSaveController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [DocuSaveController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [DocuSaveController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [DocuSaveController::class, 'logout']);