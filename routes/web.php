<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/step', [StepController::class, 'index'])->name('step1');
Route::get('/step2', [StepController::class, 'step2'])->name('step2');
Route::get('/step3', [StepController::class, 'step3'])->name('step3');
