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
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UrunController;


//Anasayfa

Route::prefix('/')->middleware('is_user')->group(function () {
    Route::get('/',  [AnasayfaController::class, 'index'])->name('anasayfa.index');
});

//login Route
Route::get('/login', [AuthController::class, 'showLogin'])->name('authentication.login');
Route::post('/login', [AuthController::class, 'customLogin'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('authentication.register');
Route::post('/register', [AuthController::class, 'customRegister'])->name('register.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('authentication.logout');


//Urunler Route
Route::get('/urunlist',[UrunController::class,'index'])->name('urun.index');
Route::get('/uruncreate', [UrunController::class, 'create'])->name('urun.create');
Route::post('/usunstore', [UrunController::class, 'store'])->name('urun.store');
Route::get('/urun/{id}', [UrunController::class, 'show'])->name('urun.show');
Route::get('/urun/{id}/edit', [UrunController::class, 'edit'])->name('urun.edit');
Route::post('/urun/update/{id}', [UrunController::class, 'update'])->name('urun.update');
Route::delete('/urun/{id}', [UrunController::class, 'destroy'])->name('urun.destroy');




//Cari Route
Route::get('/carilist', [CariController::class, 'index'])->name('caris.index');
Route::get('/caris/create', [CariController::class, 'create'])->name('caris.create');
Route::post('/cariadd', [CariController::class, 'store'])->name('caris.store');
Route::get('/caris/{id}', [CariController::class, 'show'])->name('caris.show');
Route::get('/caris/{id}/edit', [CariController::class, 'edit'])->name('caris.edit');
Route::post('/caris/update/{id}', [CariController::class, 'update'])->name('caris.update');
Route::delete('/caris/{id}', [CariController::class, 'destroy'])->name('caris.destroy');

/*Personel*/
Route::get('/personel',[PersonelController::class,'personel'])->name('personel.personel');


/*elements*/
Route::get('/elements/buttons',[ElementsController::class,'buttons'])->name('elements.buttons');



/* Form elements*/
Route::get('/forms/validation',[FormsController::class,'validation'])->name('forms.validation');


/*extra pages*/
Route::get('pages/settings',[PagesController::class,'settings'])->name('pages.settings');
Route::get('/profile',[PagesController::class,'profile'])->name('pages.profile');












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



//  Route::prefix('/caris')->group(function () {
//     Route::get('/', [CariController::class, 'index'])->name('caris.index');
//     Route::get('/create', [CariController::class, 'create'])->name('caris.create');
//     Route::post('/add', [CariController::class, 'store'])->name('caris.store');
//  });

