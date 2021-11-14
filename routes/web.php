<?php
use App\Http\Controllers\DataController;
use App\Http\Controllers\ExpresionController;
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

Route::get('/', [DataController::class, 'index'])->name('data.index');
Route::post('/store', [DataController::class, 'store'])->name('data.store');

// programa de expresiones
Route::get('/expresiones', [ExpresionController::class, 'index'])->name('exp.index');
Route::post('/expresiones/store', [ExpresionController::class, 'store'])->name('exp.store');

