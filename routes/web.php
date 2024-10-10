<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
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
Route::post('login', [AutenticationController::class, 'login'])->name('customers.login');
Route::get('index', [AutenticationController::class, 'index'])->name('customers.index');
Route::post('store', [AutenticationController::class, 'store'])->name('customers.store');
Route::get('create', [AutenticationController::class, 'create'])->name('customers.create');

Route::get('/cities/{departmentId}', [AutenticationController::class, 'getCities'])->name('customers.getCities');


Route::get('vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('vehicles/store', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('vehicles/index',[VehicleController::class, 'index']);









