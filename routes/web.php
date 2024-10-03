<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticationController;
use app\Models\User;

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
    return view('login');
});

Route::get('/', function () {
    return view('login');
});

//Route::resource('users', AutenticationController::class);
Route::post('login', [AutenticationController::class, 'login'])->name('users.login');
Route::get('index', [AutenticationController::class, 'index'])->name('users.index');
Route::post('store', [AutenticationController::class, 'store'])->name('users.store');
Route::get('create', [AutenticationController::class, 'create'])->name('users.create');
Route::post('crearvehicle', [AutenticationController::class, 'crearvehicle'])->name('users.crearvehicle');
Route::get('tipovehiculo', [AutenticationController::class, 'tipovehiculo'])->name('users.tipovehiculo');
Route::get('estadovehiculo', [AutenticationController::class, 'estadovehiculo'])->name('users.estadovehiculo');






