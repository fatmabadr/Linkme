<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ButtonController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(ButtonController::class)->group(function(){
    Route::get('/add/button','addButton')->name('add.button')->middleware(['auth']);
    Route::post('/store/button','StoreButton')->name('store.button')->middleware(['auth']);
    Route::post('/get/user/button','getUserButtons')->name('get.user.buttons');
});



require __DIR__.'/auth.php';
