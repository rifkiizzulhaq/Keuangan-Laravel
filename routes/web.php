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
        Route::get('/table-program', [AdminController::class, 'table_program'])->name('table_program');
        Route::get('/program',[AdminController::class, 'program'])->name('program');
        Route::post('/store-program', [AdminController::class, 'store_program'])->name('store_program');
        Route::get('/edit-program/{id}', [AdminController::class, 'edit_program'])->name('edit_program');
        Route::put('/update-program/{id}', [AdminController::class, 'update_program'])->name('update_program');
        Route::delete('/destroy-program/{id}', [AdminController::class, 'destroy_program'])->name('destroy_program');

        Route::get('/table-kategori',[AdminController::class, 'table_kategori'])->name('table_kategori');
        Route::get('/kategori',[AdminController::class, 'kategori'])->name('kategori');
        Route::post('/store-kategori', [AdminController::class, 'store_kategori'])->name('store_kategori');
        Route::get('/edit-kategori/{id}', [AdminController::class, 'edit_kategori'])->name('edit_kategori');
        Route::put('/update-kategori/{id}', [AdminController::class, 'update_kategori'])->name('update_kategori');
        Route::delete('/destroy-kategori/{id}', [AdminController::class, 'destroy_kategori'])->name('destroy_kategori');

        Route::get('/table-satuan',[AdminController::class, 'table_satuan'])->name('table_satuan');
        Route::get('/satuan',[AdminController::class, 'satuan'])->name('satuan');
        Route::post('/store-satuan', [AdminController::class, 'store_satuan'])->name('store_satuan');
        Route::get('/edit-satuan/{id}', [AdminController::class, 'edit_satuan'])->name('edit_satuan');
        Route::put('/update-satuan/{id}', [AdminController::class, 'update_satuan'])->name('update_satuan');
        Route::delete('/destroy-satuan/{id}', [AdminController::class, 'destroy_satuan'])->name('destroy_satuan');

        Route::get('/table-akun-detail',[AdminController::class, 'table_akun_detail'])->name('table_akun_detail');
        Route::get('/akun-detail',[AdminController::class, 'akun_detail'])->name('akun_detail');
        Route::post('/store-akun-detail', [AdminController::class, 'store_akun_detail'])->name('store_akun_detail');
        Route::get('/edit-akun-detail/{id}', [AdminController::class, 'edit_akun_detail'])->name('edit_akun_detail');
        Route::put('/update-akun-detail/{id}', [AdminController::class, 'update_akun_detail'])->name('update_akun_detail');
        Route::delete('/destroy-akun-detail/{id}', [AdminController::class, 'destroy_akun_detail'])->name('destroy_akun_detail');
    });

    Route::middleware(['CheckUserRole:Pemimpin'])->group(function () {
        Route::get('/dashboard', [PemimpinController::class, 'index'])->name('dashboard');

    });

    Route::middleware(['CheckUserRole:Unit'])->group(function () {
        Route::get('/usulan-kegiatan', [UnitController::class, 'table_usulan_kegiatan'])->name('table_usulan_kegiatan');
        Route::post('/store-tahun', [UnitController::class, 'store_tahun'])->name('store_tahun');
        Route::post('/store-table-usulan/{name}',[UnitController::class, 'store_table_program'])->name('store_table_usulan');
        Route::put('/update-usulan/{id}', [UnitController::class, 'update_usulan'])->name('update_usulan');
        Route::post('/store-table-kegiatan/{name}',[UnitController::class, 'store_table_kegiatan'])->name('store_table_kegiatan');
        Route::delete('/destroy-table-usulan/{id}', [UnitController::class, 'destroy_table_usulan'])->name('destroy_table_usulan');
        // Route::post('/store-usulan-unit',[UnitController::class, 'store_usulan_unit'])->name('store_usulan_unit');


        Route::get('/table-judul-kegiatan',[UnitController::class, 'table_judul_kegiatan'])->name('table_judul_kegiatan');
        Route::post('/store-judul-kegiatan/{name}',[UnitController::class, 'store_table_judul_kegiatan'])->name('store_table_judul_kegiatan');
        Route::put('/update-judul-kegiatan/{id}', [UnitController::class, 'update_judul_kegiatan'])->name('update_judul_kegiatan');
        Route::delete('/destroy-table-judul-kegiatan/{id}',[UnitController::class, 'destroy_table_judul_kegiatan'])->name('destroy_table_judul_kegiatan');
    });
});

// Route::middleware('auth')->group(function () {

// });

require __DIR__.'/auth.php';
