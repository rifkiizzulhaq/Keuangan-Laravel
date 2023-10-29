<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pemimpin\PemimpinController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Superadmin\SuperadminController;
use App\Http\Controllers\Unit\UnitController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['CheckUserRole:Superadmin'])->group(function () {
        Route::get('/account', [SuperadminController::class, 'account'])->name('account');
        Route::get('/account-admin', [SuperadminController::class, 'admin'])->name('account.admin');
        Route::get('/create-admin', [SuperadminController::class, 'create_admin'])->name('create_admin');
        Route::post('/store-admin', [SuperadminController::class, 'store_admin'])->name('store_admin');
        Route::get('/edit-admin/{id}', [SuperadminController::class, 'edit_admin'])->name('edit_admin');
        Route::put('/update-admin/{id}', [SuperadminController::class, 'update_admin'])->name('update_admin');
        Route::delete('/destroy-admin/{id}', [SuperadminController::class, 'destroy_admin'])->name('destroy_admin');

        Route::get('/account-pemimpin', [SuperadminController::class, 'pemimpin'])->name('account.pemimpin');
        Route::get('/create-pemimpin', [SuperadminController::class, 'create_pemimpin'])->name('create_pemimpin');
        Route::post('/store-pemimpin', [SuperadminController::class, 'store_pemimpin'])->name('store_pemimpin');
        Route::get('/edit-pemimpin/{id}', [SuperadminController::class, 'edit_pemimpin'])->name('edit_pemimpin');
        Route::put('/update-pemimpin/{id}', [SuperadminController::class, 'update_pemimpin'])->name('update_pemimpin');
        Route::delete('/destroy-pemimpin/{id}', [SuperadminController::class, 'destroy_pemimpin'])->name('destroy_pemimpin');

        Route::get('/account-unit', [SuperadminController::class, 'unit'])->name('account.unit');
        Route::get('/create-unit', [SuperadminController::class, 'create_unit'])->name('create_unit');
        Route::post('/store-unit', [SuperadminController::class, 'store_unit'])->name('store_unit');
        Route::get('/edit-unit/{id}', [SuperadminController::class, 'edit_unit'])->name('edit_unit');
        Route::put('/update-unit/{id}', [SuperadminController::class, 'update_unit'])->name('update_unit');
        Route::delete('/destroy-unit/{id}', [SuperadminController::class, 'destroy_unit'])->name('destroy_unit');
    });

    Route::middleware(['CheckUserRole:Admin'])->group(function () {
        // Route::get('/usulan-unit', [AdminController::class, 'usulan_unit'])->name('admin.usulan_unit');
        Route::get('/usulan', [AdminController::class, 'usulan'])->name('admin.usulan');
        Route::get('/unit-mengusulkan/{id}',[AdminController::class, 'unit_mengusulkan'])->name('admin.unit_mengusulkan');
        Route::post('/admin-mengusulkan-kode/{id}',[AdminController::class, 'buat_kode_usulan'])->name('admin.buat_kode_usulan');
        Route::get('/admin-modal/{id}',[AdminController::class, 'modal'])->name('admin.modal');
        Route::get('/admin-lihat-detail/{id}',[AdminController::class, 'lihat_detail'])->name('admin.lihat_detail');

        Route::get('/admin-program', [AdminController::class, 'program'])->name('admin.program');
        Route::get('/program-create', [AdminController::class, 'program_create'])->name('admin.program_create');
        Route::post('/program-store', [AdminController::class, 'program_store'])->name('admin.program_store');
        Route::get('/program-edit/{id}', [AdminController::class, 'program_edit'])->name('admin.program_edit');
        Route::put('/update-program/{id}', [AdminController::class, 'update_program'])->name('admin.update_program');
        Route::delete('/destroy-program/{id}', [AdminController::class, 'program_delete'])->name('admin.program_delete');

        Route::get('/admin-kegiatan',[AdminController::class, 'kegiatan'])->name('admin.kegiatan');
        Route::get('/kegiatan-create',[AdminController::class, 'kegiatan_create'])->name('admin.kegiatan_create');
        Route::post('/kegiatan-store',[AdminController::class, 'kegiatan_store'])->name('admin.kegiatan_store');
        Route::get('/kegiatan-edit/{id}',[AdminController::class, 'kegiatan_edit'])->name('admin.kegiatan_edit');
        Route::put('/update-kegiatan/{id}',[AdminController::class, 'update_kegiatan'])->name('admin.update_kegiatan');
        Route::delete('/destroy-kegiatan/{id}',[AdminController::class, 'kegiatan_delete'])->name('admin.kegiatan_delete');

        Route::get('/admin-kro',[AdminController::class, 'kro'])->name('admin.kro');
        Route::get('/kro-create',[AdminController::class, 'kro_create'])->name('admin.kro_create');
        Route::post('/kro-store',[AdminController::class, 'kro_store'])->name('admin.kro_store');
        Route::get('/kro-edit/{id}',[AdminController::class, 'kro_edit'])->name('admin.kro_edit');
        Route::put('/update-kro/{id}',[AdminController::class, 'update_kro'])->name('admin.update_kro');
        Route::delete('/destroy-kro/{id}',[AdminController::class, 'kro_delete'])->name('admin.kro_delete');

        Route::get('/admin-ro',[AdminController::class, 'ro'])->name('admin.ro');
        Route::get('/ro-create',[AdminController::class, 'ro_create'])->name('admin.ro_create');
        Route::post('/ro-store',[AdminController::class, 'ro_store'])->name('admin.ro_store');
        Route::get('/ro-edit/{id}',[AdminController::class, 'ro_edit'])->name('admin.ro_edit');
        Route::put('/update-ro/{id}',[AdminController::class, 'update_ro'])->name('admin.update_ro');
        Route::delete('/destroy-ro/{id}',[AdminController::class, 'ro_delete'])->name('admin.ro_delete');

        Route::get('/admin-komponen',[AdminController::class, 'komponen'])->name('admin.komponen');
        Route::get('/komponen-create',[AdminController::class, 'komponen_create'])->name('admin.komponen_create');
        Route::post('/komponen-store',[AdminController::class, 'komponen_store'])->name('admin.komponen_store');
        Route::get('/komponen-edit/{id}',[AdminController::class, 'komponen_edit'])->name('admin.komponen_edit');
        Route::put('/update-komponen/{id}',[AdminController::class, 'update_komponen'])->name('admin.update_komponen');
        Route::delete('/destroy-komponen/{id}',[AdminController::class, 'komponen_delete'])->name('admin.komponen_delete');

        Route::get('/sub-komponen',[AdminController::class, 'sub_komponen'])->name('admin.sub_komponen');
        Route::get('/sub-komponen-create',[AdminController::class, 'sub_komponen_create'])->name('admin.sub_komponen_create');
        Route::post('/sub-komponen-store',[AdminController::class, 'sub_komponen_store'])->name('admin.sub_komponen_store');
        Route::get('/sub-komponen-edit/{id}',[AdminController::class, 'sub_komponen_edit'])->name('admin.sub_komponen_edit');
        Route::put('/update-sub-komponen/{id}',[AdminController::class, 'update_sub_komponen'])->name('admin.update_sub_komponen');
        Route::delete('/destroy-sub-komponen/{id}',[AdminController::class, 'sub_komponen_delete'])->name('admin.sub_komponen_delete');

        Route::get('/sub-komponen-detail',[AdminController::class, 'sub_komponen_detail'])->name('admin.sub_komponen_detail');
        Route::get('/sub-komponen-detail-create',[AdminController::class, 'sub_komponen_detail_create'])->name('admin.sub_komponen_detail_create');
        Route::post('/sub-komponen-detail-store',[AdminController::class, 'sub_komponen_detail_store'])->name('admin.sub_komponen_detail_store');
        Route::get('/sub-komponen-detail-edit/{id}',[AdminController::class, 'sub_komponen_detail_edit'])->name('admin.sub_komponen_detail_edit');
        Route::put('/update-sub-komponen-detail/{id}',[AdminController::class, 'update_sub_komponen_detail'])->name('admin.update_sub_komponen_detail');
        Route::delete('/destroy-sub-komponen-detail/{id}',[AdminController::class, 'sub_komponen_detail_delete'])->name('admin.sub_komponen_detail_delete');
    });

    Route::middleware(['CheckUserRole:Pemimpin'])->group(function () {
        Route::get('/dashboard', [PemimpinController::class, 'index'])->name('dashboard');

    });

    Route::middleware(['CheckUserRole:Unit'])->group(function () {
        Route::get('/unit-kegiatan', [UnitController::class, 'index'])->name('unit.kegiatan');
        Route::get('/unit-anggaran', [UnitController::class, 'anggaran'])->name('unit.anggaran');
        Route::post('/store-anggaran', [UnitController::class, 'store_anggaran'])->name('unit.store_anggaran');
        Route::get('/edit-anggaran/{id}', [UnitController::class, 'edit_anggaran'])->name('unit.edit_anggaran');
        Route::put('/update-anggaran/{id}', [UnitController::class, 'update_anggaran'])->name('unit.update_anggaran');
        Route::delete('/destroy-anggaran/{id}', [UnitController::class, 'destroy_anggaran'])->name('unit.destroy_anggaran');

        Route::get('/unit-rpd', [UnitController::class, 'rpd'])->name('unit.rpd');
    });
});

// Route::middleware('auth')->group(function () {

// });

require __DIR__.'/auth.php';
