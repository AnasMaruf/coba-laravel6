<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});
Route::get('/posts', function () {
    return view('/posts', [
        'title' => 'Posts',
        'active' => 'posts'
    ]);
});
Route::get('/categories', function () {
    return view('/categories', [
        'title' => 'categories',
        'active' => 'categories'
    ]);
});
Route::get('/about', function () {
    return view('/about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard Posts',
        ''
    ]);
});
