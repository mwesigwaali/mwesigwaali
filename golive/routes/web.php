<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/contactus', function () {
    return view('pages.contactus2');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', [\App\Http\Controllers\PagerController::class, 'index']);
Route::get('/{pager}', [\App\Http\Controllers\PagerController::class, 'show']);
Route::get('/blog/create', [\App\Http\Controllers\PagerController::class, 'create']); //shows create post form
Route::post('/blog/create', [\App\Http\Controllers\PagerController::class, 'store']); //saves the created post to the databse
Route::get('/{pager}/edit', [\App\Http\Controllers\PagerController::class, 'edit']); //shows edit post form
Route::put('/{pager}/edit', [\App\Http\Controllers\PagerController::class, 'update']); //commits edited post to the database 
Route::delete('/{pager}', [\App\Http\Controllers\PagerController::class, 'destroy']); //deletes post from the database
