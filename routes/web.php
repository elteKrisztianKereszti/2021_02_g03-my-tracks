<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TransposerController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index']);

//Route::view('/projects', 'projects.index');

Route::get('/projects', [ProjectController:: class, 'index']);
Route::get('/projects/create', [ProjectController:: class, 'create']);
Route::get('/projects/1', [ProjectController:: class, 'detail'])->name('foo');
Route::get('/projects/1/tracks/create', [ProjectController:: class, 'create_tracks']);
//Route::get('/transposer', [TransposerController:: class, 'index']);
