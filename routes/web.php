<?php

use App\Http\Controllers\CategoriesPostsController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardPostsController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard Posts',
        'active' => 'dashboard'
    ]);
});
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth')->parameters([
    'posts' => 'post:slug'
]);
Route::resource('/dashboard/categories', CategoriesPostsController::class)->middleware('auth')->middleware('admin');
