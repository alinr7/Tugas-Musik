<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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
    return view('dash');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>['auth', 'ceklevel:admin']], function(){
    Route::get('/add',[MusicController::class, 'create']);
    
    Route::get('/delete/{id}',[MusicController::class,'destroy']);
    Route::get('/edit/{id}',[MusicController::class,'edit']);
});

Route::resource('musik', MusicController::class);
Route::get('/dash',[MusicController::class, 'das']);
Route::get('/home',[MusicController::class, 'index'])->middleware('auth');
Route::get('/detail/{id}',[MusicController::class,'show']);


require __DIR__.'/auth.php';
