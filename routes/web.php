<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Auth::routes();

route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/home', [PostController::class,'index'])->name('home');
Route::get('/createstts', [PostController::class,'create']);
Route::get('/saveblog', [PostController::class,'store']);
Route::get('/edit/{id}', [PostController::class,'edsit']);
Route::put('/updateblog/{id}', [PostController::class, 'update']);
Route::put('/delete/{id}', [PostController::class, 'destory']);

///
