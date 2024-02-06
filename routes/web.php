<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [IndexController::class, 'home']);
Route::controller(IndexController::class)->group(function (){
    route::get('/', 'index');
    route::post('/login_admin','loginAdmin');
    route::post('/login_guru', 'loginGuru');
    route::post('/login_siswa', 'loginSiswa');
    route::get('/logout', 'logout');
    route::get('/home', 'home');
});


