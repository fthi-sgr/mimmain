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
use App\Http\Controllers\FinansController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\CityDistrictController;


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

// Ürünler ve Hizmetler Page Route
Route::prefix('urunhizmet')->group(function(){
    //Urunler Route
    Route::get('/urunlist',[UrunController::class,'indexUrun'])->name('urunhizmet.uruns.index');
    Route::get('/urun/create', [UrunController::class, 'createUrun'])->name('urunhizmet.uruns.create');
    Route::post('/urunstore', [UrunController::class, 'storeUrun'])->name('urunhizmet.uruns.store');
    Route::get('/urun/{id}', [UrunController::class, 'showUrun'])->name('urunhizmet.uruns.show');
    Route::get('/urun/{id}/edit', [UrunController::class, 'editUrun'])->name('urunhizmet.uruns.edit');
    Route::post('/urun/update/{id}', [UrunController::class, 'updateUrun'])->name('urunhizmet.uruns.update');
    Route::delete('/urun/{id}', [UrunController::class, 'destroyUrun'])->name('urunhizmet.uruns.destroy');
    Route::get('/fetch-urun-adlari',[UrunController::class,'fetchUrunAdlari'])->name('urunhizmet.uruns.fetchUrunAdlari');
    // Hizmet Route
    Route::get('/hizmetlist',[UrunController::class,'indexHizmet'])->name('urunhizmet.hizmet.index');
    Route::get('/hizmet/create', [UrunController::class, 'createHizmet'])->name('urunhizmet.hizmet.create');
    Route::post('/hizmetstore', [UrunController::class, 'storeHşzmet'])->name('urunhizmet.hizmet.store');
    Route::get('/hizmet/{id}', [UrunController::class, 'showHizmet'])->name('urunhizmet.hizmet.show');
    Route::get('/hizmet/{id}/edit', [UrunController::class, 'editHizmet'])->name('urunhizmet.hizmet.edit');
    Route::post('/hizmet/update/{id}', [UrunController::class, 'updateHizmet'])->name('urunhizmet.hizmet.update');
    Route::delete('/hizmet/{id}', [UrunController::class, 'destroyHizmet'])->name('urunhizmet.hizmet.destroy');

    //Dapolar Route
    Route::get('/depolist',[UrunController::class,'indexDepo'])->name('urunhizmet.depos.index');
    Route::get('/depo/create', [UrunController::class, 'createDepo'])->name('urunhizmet.depos.create');
    Route::post('/depostore', [UrunController::class, 'storeDepo'])->name('urunhizmet.depos.store');
    Route::get('/depo/{id}', [UrunController::class, 'showDepo'])->name('urunhizmet.depos.show');
    Route::get('/depo/{id}/edit', [UrunController::class, 'editDepo'])->name('urunhizmet.depos.edit');
    Route::post('/depo/update/{id}', [UrunController::class, 'updateDepo'])->name('urunhizmet.depos.update');
    Route::delete('/depo/{id}', [UrunController::class, 'destroyDepo'])->name('urunhizmet.depos.destroy');

    // İlleri getiren route
    Route::get('/get-cities', [UrunController::class, 'getCities']);

    // İlçeleri getiren route
    Route::get('/get-districts/{cityId}', [UrunController::class, 'getDistricts']);





});
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

