<?php

use App\Http\Controllers\MarcaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $marcas = DB::connection('mysql2')->table('marca')->get();

    return Inertia::render('Home', [
        'marcas' => $marcas
    ]);
})->name('home');;

Route::get('/marca/{nombre}', [MarcaController::class, 'index'])->name('marca.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
