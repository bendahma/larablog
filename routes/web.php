<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController; 
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

Route::get('/', [frontendController::class,'index'])->name('index');
Route::get('/category/{category}', [frontendController::class,'categoryPosts'])->name('categoryPosts');
Route::get('/posts/{post}', [frontendController::class,'post'])->name('post');
Route::get('/codesnippets', [frontendController::class,'codesnippets'])->name('codesnippets');
Route::get('/about', [frontendController::class,'about'])->name('about');

Route::get('/post', function () {
    return view('post');
});

Route::middleware(['auth'])->group(function () {
    Route::name('admin.')->group(function(){
        Route::get('/dashboard', [AdminController::class,'dashboard'] )->name('dashboard');
    });
});



require __DIR__.'/auth.php';
