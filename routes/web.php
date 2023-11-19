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

// Route::get('/carislist', [CariController::class, 'index'])->name('caris.index');
Route::get('/caris/create', [CariController::class, 'create'])->name('caris.create');
Route::post('/cariadd', [CariController::class, 'store'])->name('caris.store');
Route::get('/caris/{id}', [CariController::class, 'show'])->name('caris.show');
Route::get('/caris/{id}/edit', [CariController::class, 'edit'])->name('caris.edit');
Route::post('/caris/update/{id}', [CariController::class, 'update'])->name('caris.update');
Route::delete('/caris/{id}', [CariController::class, 'destroy'])->name('caris.destroy');


Route::get('/', [CariController::class, 'index'])->name('caris.index');






// Route::prefix('/company')->group(function () {
//     Route::get('', [\App\Http\Controllers\Company\CompanyIndexController::class, 'companyIndex'])->name('company.index');

//     Route::prefix('/official')->group(function () {
//         Route::get('/list', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialList'])->name('company.official.list');
//         Route::match(['get', 'post'], '/add', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialAdd'])->name('company.official.add');
//         Route::match(['get', 'post'],'/delete/{id}', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialDelete'])->name('company.official.delete');
//         Route::match(['get', 'post'],'/restore/{id}', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialRestore'])->name('company.official.restore');
//         Route::match(['get', 'post'],'/forceDelete/{id}', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialForceDelete'])->name('company.official.force.delete');
//         Route::match(['get', 'post'], '/edit/{id}', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialEdit'])->name('company.official.edit');
//         Route::match(['get', 'post'], '/permissions/{id}', [\App\Http\Controllers\Company\CompanyOfficialController::class, 'companyOfficialPermissionsEdit'])->name('company.official.permissions.edit');
//     });

// });
