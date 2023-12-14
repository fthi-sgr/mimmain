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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\HizmetController;
use App\Http\Controllers\DepoController;
use App\Http\Controllers\FinansController;
use App\Http\Controllers\SiparisController;


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

//ürünler ve hizmetler route--------------------------------------------------------
//Route::get('/urunhizmet',[TumuController::class,'index'])->name('urunhizmet.index');

//Urunler Route
Route::get('/urunlist',[UrunController::class,'index'])->name('uruns.index');
Route::get('/uruncreate', [UrunController::class, 'create'])->name('uruns.create');
Route::post('/urunstore', [UrunController::class, 'store'])->name('uruns.store');
Route::get('/urun/{id}', [UrunController::class, 'show'])->name('uruns.show');
Route::get('/urun/{id}/edit', [UrunController::class, 'edit'])->name('uruns.edit');
Route::post('/urun/update/{id}', [UrunController::class, 'update'])->name('uruns.update');
Route::delete('/urun/{id}', [UrunController::class, 'destroy'])->name('uruns.destroy');

// Hizmet Route
Route::get('/hizmetlist',[HizmetController::class,'index'])->name('hizmet.index');
Route::get('/hizmetcreate', [HizmetController::class, 'create'])->name('hizmet.create');
Route::post('/hizmetstore', [HizmetController::class, 'store'])->name('hizmet.store');
Route::get('/hizmet/{id}', [HizmetController::class, 'show'])->name('hizmet.show');
Route::get('/hizmet/{id}/edit', [HizmetController::class, 'edit'])->name('hizmet.edit');
Route::post('/hizmet/update/{id}', [HizmetController::class, 'update'])->name('hizmet.update');
Route::delete('/hizmet/{id}', [HizmetController::class, 'destroy'])->name('hizmet.destroy');

//Dapolar Route
Route::get('/depolist',[DepoController::class,'index'])->name('depo.index');
Route::get('/depocreate', [DepoController::class, 'create'])->name('depos.create');
Route::post('/depostore', [DepoController::class, 'store'])->name('depos.store');
Route::get('/depo/{id}', [DepoController::class, 'show'])->name('depos.show');
Route::get('/depo/{id}/edit', [DepoController::class, 'edit'])->name('depos.edit');
Route::post('/depo/update/{id}', [DepoController::class, 'update'])->name('depos.update');
Route::delete('/depo/{id}', [DepoController::class, 'destroy'])->name('depos.destroy');

//----------------------------------------------------------------------------------------------
//Cari Route
Route::get('/carilist', [CariController::class, 'index'])->name('caris.index');
Route::get('/caris/create', [CariController::class, 'create'])->name('caris.create');
Route::post('/cariadd', [CariController::class, 'store'])->name('caris.store');
Route::get('/caris/{id}', [CariController::class, 'show'])->name('caris.show');
Route::get('/caris/{id}/edit', [CariController::class, 'edit'])->name('caris.edit');
Route::post('/caris/update/{id}', [CariController::class, 'update'])->name('caris.update');
Route::delete('/caris/{id}', [CariController::class, 'destroy'])->name('caris.destroy');




//Finans page Route
Route::prefix('finans')->group(function () {
    // Banka CRUD işlemleri
    Route::get('/bankalar', [FinansController::class, 'indexBanka'])->name('finans.banks.index');
    Route::get('/bankalar/create', [FinansController::class, 'createBanka'])->name('finans.banks.create');
    Route::post('/bankalar', [FinansController::class, 'storeBanka'])->name('finans.banks.store');
    Route::get('/bankalar/{id}', [FinansController::class, 'showBanka'])->name('finans.banks.show');
    Route::get('/bankalar/{id}/edit', [FinansController::class, 'editBanka'])->name('finans.banks.edit');
    Route::post('/bankalar/update/{id}', [FinansController::class, 'updateBanka'])->name('finans.banks.update');
    Route::delete('/bankalar/{id}', [FinansController::class, 'destroyBanka'])->name('finans.banks.destroy');

    //Kasa CRUD işlemerlri





});

// Satıs islemleri
Route::prefix('satis')->group(function(){

    Route::get('/asiparis',[SiparisController::class,'index'])->name('satis.asiparis.index');
    Route::get('/asiparis/create',[SiparisController::class,'create'])->name('satis.asiparis.create');
    Route::Post('asiparis',[SiparisController::class,'store'])->name('satis.asiparis.store');
});



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

