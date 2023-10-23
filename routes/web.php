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
        Route::get('/admin-program', [AdminController::class, 'program'])->name('admin.program');
    });

    Route::middleware(['CheckUserRole:Pemimpin'])->group(function () {
        Route::get('/dashboard', [PemimpinController::class, 'index'])->name('dashboard');
    });

    Route::middleware(['CheckUserRole:Unit'])->group(function () {
        Route::get('/unit-kegiatan', [UnitController::class, 'index'])->name('unit.kegiatan');
    });
});

// Route::middleware('auth')->group(function () {

// });

require __DIR__.'/auth.php';
