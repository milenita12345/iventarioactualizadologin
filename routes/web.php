<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ProductoController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    if (Auth::check()) {
        return view('dashboard');
    } else {
        return redirect()->route('login'); // Suponiendo que tu ruta de login se llama 'login'
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('proveedores', ProveedorController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('tipos', TipoController::class);
Route::resource('laboratorios', LaboratorioController::class);
Route::resource('productos', ProductoController::class);

require __DIR__.'/auth.php';
