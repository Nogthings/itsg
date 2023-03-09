<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ReporteCubiculoController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\CubiculoController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return redirect('visitas');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras');
    Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos');
    Route::get('/reportes-biblioteca', [ReporteController::class, 'index' ])->name('reportes');
    Route::get('/reportes-cubiculo', [ReporteCubiculoController::class, 'index' ])->name('reportesCubiculo');
    Route::get('/cubiculos',[CubiculoController::class, 'index'])->name('cubiculos');
    Route::get('/ayuda', [AyudaController::class, 'index'])->name('ayuda');
});

Route::get('/visitas', [VisitaController::class, 'index'])->name('visitas');