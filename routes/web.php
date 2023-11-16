<?php

use Illuminate\Support\Facades\Route;

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
// routes/web.php

use App\Http\Controllers\CariController;

Route::get('/caris', [CariController::class, 'index'])->name('caris.index');
Route::get('/caris/create', [CariController::class, 'create'])->name('caris.create');
Route::post('/caris', [CariController::class, 'store'])->name('caris.store');
Route::get('/caris/{cari}', [CariController::class, 'show'])->name('caris.show');
Route::get('/caris/{cari}/edit', [CariController::class, 'edit'])->name('caris.edit');
//Route::put('/caris/{id}', [CariController::class, 'update'])->name('caris.update');
Route::put('/caris/{cari}', 'CariController@update')->name('caris.update');

Route::delete('/caris/{cari}', [CariController::class, 'destroy'])->name('caris.destroy');


