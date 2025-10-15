<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

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
    return view ('welcome');
}
);


Route::get('/profile/{nama}/{npm}/{kelas}/{foto?}', [ProfileController::class, 'profile']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']) -> name(name: 'user.create');
Route::post('/user', [UserController::class, 'store'])->name(name : 'user.store');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::resource('user', UserController::class);



Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/{uuid}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/matakuliah/{uuid}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{uuid}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
