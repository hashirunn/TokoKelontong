<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\WarehouseStaffController;
use App\Http\Controllers\CashierController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.manageUsers'); // Manajemen user
    Route::get('/admin/roles', [AdminController::class, 'manageRoles'])->name('admin.manageRoles'); // Manajemen role
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings'); // Pengaturan aplikasi
});

Route::middleware(['role:owner'])->group(function () {
    Route::get('/owner/dashboard', [OwnerController::class, 'index'])->name('owner.dashboard');
    Route::get('/owner/reports', [OwnerController::class, 'reports'])->name('owner.reports'); // Laporan bisnis
    Route::get('/owner/branches', [OwnerController::class, 'branches'])->name('owner.branches'); // Mengelola cabang-cabang
});

Route::middleware(['role:manager'])->group(function () {
    Route::get('/manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
    Route::get('/manager/employees', [ManagerController::class, 'manageEmployees'])->name('manager.manageEmployees'); // Mengelola karyawan
    Route::get('/manager/performance', [ManagerController::class, 'performance'])->name('manager.performance'); // Pemantauan performa tim
});

Route::middleware(['role:supervisor'])->group(function () {
    Route::get('/supervisor/dashboard', [SupervisorController::class, 'index'])->name('supervisor.dashboard');
    Route::get('/supervisor/tasks', [SupervisorController::class, 'manageTasks'])->name('supervisor.manageTasks'); // Mengelola tugas karyawan
    Route::get('/supervisor/daily-report', [SupervisorController::class, 'dailyReport'])->name('supervisor.dailyReport'); // Pemantauan kegiatan harian
});

// Routes untuk Warehouse Staff
Route::middleware(['role:warehouse-staff'])->group(function () {
    Route::get('/warehouse/dashboard', [WarehouseStaffController::class, 'index'])->name('warehouse.dashboard');
    Route::get('/warehouse/receive-items', [WarehouseStaffController::class, 'receiveItems'])->name('warehouse.receiveItems'); // Penerimaan barang
    Route::get('/warehouse/ship-items', [WarehouseStaffController::class, 'shipItems'])->name('warehouse.shipItems'); // Pengiriman barang
});

// Routes untuk Cashier
Route::middleware(['role:cashier'])->group(function () {
    Route::get('/cashier/dashboard', [CashierController::class, 'index'])->name('cashier.dashboard');
    Route::get('/cashier/transaction', [CashierController::class, 'transaction'])->name('cashier.transaction'); // Transaksi penjualan
    Route::get('/cashier/history', [CashierController::class, 'history'])->name('cashier.history'); // Riwayat transaksi
});

require __DIR__.'/auth.php';
