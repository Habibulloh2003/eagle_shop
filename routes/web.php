<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
/*Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');*/

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function (){
    Route::get('/', [ProductController::class, 'test'])->name('home');
    Route::get('/news', function () {
        return view('home');
    })->name('news');
    Route::get('/about', function () {
        return view('home');
    })->name('about');
    Route::get('/categories', function () {
        return view('home');
    })->name('categories');
    Route::get('/product/{id}', [ProductController::class, 'index']);
    Route::get('/sms/{message}', [ProductController::class, 'sendMessage']);
});

