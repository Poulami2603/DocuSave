<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocuSaveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [DocuSaveController::class,'login']);
Route::get('/registration', [DocuSaveController::class,'registration']); 
Route::post('/register-user', [DocuSaveController::class, 'registerUser'])->name('register-user');
