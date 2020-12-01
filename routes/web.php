<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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

Route::get('/tasks', [\App\Http\Controllers\TasksController::class, 'index']);

Route::get('/tasks/create', 'TasksController@create');

Route::get('/tasks/edit', 'TasksController@edit');


Route::get('/home', function (){
    return view('home');

})->middleware('auth')->name('home');

/*Route::get('/register', function(){
    return view('auth/register');
});

Route::get('/login', function (){
    return view('auth/login');
}); */

Route::get('/boards', [BoardController::class, 'index'])->middleware('auth')->name('boards.index');

Route::get('/board/create', [App\Http\Controllers\BoardController::class, 'create'])->middleware('auth')->name('boards.create');
Route::post('/boards', [App\Http\Controllers\BoardController::class, 'store'])->middleware('auth')->name('boards.store');
