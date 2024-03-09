<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('producto')->group(function () {
    Route::get('/', [ProductoController::class, 'index'])->name('producto.index'); // Listar productos
    Route::get('/create', [ProductoController::class, 'create'])->name('producto.create'); // Mostrar formulario para crear producto
    Route::post('/', [ProductoController::class, 'store'])->name('producto.store'); // Guardar nuevo producto
    Route::get('/{producto}', [ProductoController::class, 'show'])->name('producto.show'); // Mostrar detalle de un producto
    Route::get('/{producto}/edit', [ProductoController::class, 'edit'])->name('producto.edit'); // Mostrar formulario para editar producto
    Route::put('/{producto}', [ProductoController::class, 'update'])->name('producto.update'); // Actualizar un producto
    Route::delete('/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy'); // Eliminar un producto
});

require __DIR__.'/auth.php';
