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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/cazador-de-mitos', [App\Http\Controllers\PageController::class, 'hoaxBuster'])->name('hoax-buster');
Route::get('/reservar-lugar-para-tu-vacuna/{modulo}', [App\Http\Controllers\PageController::class, 'bookingVaccine'])->name('booking-vaccine');
Route::post('/citas', [App\Http\Controllers\AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/terminos-y-condiciones', [App\Http\Controllers\PageController::class, 'conditions'])->name('conditions');
Route::get('/politica-de-privacidad', [App\Http\Controllers\PageController::class, 'policy'])->name('policy');
Route::get('/admin', [App\Http\Controllers\PageController::class, 'admin'])->name('admin');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/usuarios', App\Http\Controllers\UserController::class)->names('users');
    Route::resource('/modulos', App\Http\Controllers\ModuleController::class)->names('modules');
    Route::get('/citas', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/citas/{cita}', [App\Http\Controllers\AppointmentController::class, 'show'])->name('appointments.show');
    Route::get('/citas/{cita}/editar', [App\Http\Controllers\AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::put('/citas/{cita}', [App\Http\Controllers\AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/citas/{cita}', [App\Http\Controllers\AppointmentController::class, 'destroy'])->name('appointments.destroy');
});
