<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\OwnerController;
// use App\Http\Controllers\ManagerController;
// use App\Http\Controllers\SupervisorController;
// use App\Http\Controllers\WarehouseStaffController;
// use App\Http\Controllers\CashierController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\StoreStaffController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::group(['middleware' => ['role:admin']],function () {
    Route::prefix('/user')
        ->name('user')
        ->group(function(){
            Route::get('/', [UserController::class, 'index']);
        }
    );
    // Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.manageUsers'); // Manajemen user
    // Route::get('/admin/roles', [AdminController::class, 'manageRoles'])->name('admin.manageRoles'); // Manajemen role
    // Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings'); // Pengaturan aplikasi
});

Route::group(['middleware' => ['role:owner']],function () {
    Route::prefix('/staff')
    ->name('staff')
    ->group(function () {
        Route::get('/', [StaffController::class, 'index']);
        Route::get('/create', [StaffController::class, 'create'])->name('.create');
        Route::post('/', [StaffController::class, 'store'])->name('.store');
        Route::get('/{id}', [StaffController::class, 'edit'])->name('.edit');
        Route::patch('/{id}', [StaffController::class, 'update'])->name('.update');
        Route::delete('/{id}', [StaffController::class, 'destroy'])->name('.delete');
    });
    
    Route::prefix('/stores')
    ->name('stores')
    ->group(function () {
        Route::get('/', [StoresController::class, 'index']);
        Route::get('/create', [StoresController::class, 'create'])->name('.create');
        Route::post('/create', [StoresController::class, 'store'])->name('.store');
        Route::get('/{id}', [StoresController::class, 'edit'])->name('.edit');
        Route::patch('/{id}', [StoresController::class, 'update'])->name('.update');
    });

    // Route::get('/staff', [OwnerController::class, 'staff'])->name('staff');
    // Route::get('/store', [OwnerController::class, 'stores'])->name('stores');
    // Route::get('/warehouse', [OwnerController::class, 'warehouse'])->name('warehouse');
    // Route::get('/reports', [OwnerController::class, 'reports'])->name('owner.reports'); // Laporan bisnis
    // Route::get('/branches', [OwnerController::class, 'branches'])->name('owner.branches'); // Mengelola cabang-cabang
});

Route::group(['middleware' => ['role:manager']],function () {
    Route::prefix('/storestaff')
        ->name('storestaff')
        ->group(function(){
            Route::get('/', [StoreStaffController::class, 'index']);
            Route::get('/{id}', [StoreStaffController::class, 'branch'])->name('.branch');
            Route::get('/staff/{id}', [StoreStaffController::class, 'edit'])->name('.edit');
            Route::patch('/staff/{id}', [StoreStaffController::class, 'update'])->name('.update');
            Route::get('/{id}/create', [StoreStaffController::class, 'create'])->name('.create');
            Route::post('/', [StoreStaffController::class, 'store'])->name('.store');
            Route::post('/{id}', [StoreStaffController::class, 'assign'])->name('.assign');
            Route::delete('/{id}', [StoreStaffController::class, 'remove'])->name('.remove');
        });
    // Route::get('/manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
    // Route::get('/manager/employees', [ManagerController::class, 'manageEmployees'])->name('manager.manageEmployees'); // Mengelola karyawan
    // Route::get('/manager/performance', [ManagerController::class, 'performance'])->name('manager.performance'); // Pemantauan performa tim
});

Route::group(['middleware' => ['role:warehouse_staff|supervisor']], function () {
    Route::prefix('/warehouse')
        ->name('warehouse')
        ->group(function(){
            Route::get('/', [WarehouseController::class, 'index']);
            Route::get('/item', [WarehouseController::class, 'create'])->name('.item.create');
            Route::post('/item', [WarehouseController::class, 'store'])->name('.item.store');
            Route::get('/item/{id}', [WarehouseController::class, 'edit'])->name('.item.edit');
            Route::patch('/item/{id}', [WarehouseController::class, 'update'])->name('.item.update');
            Route::get('/transaction', [WarehouseController::class, 'transactionIndex'])->name('.transaction');
            Route::post('/transaction', [WarehouseController::class, 'transactionStore'])->name('.transaction.store');
        }
    );
});

Route::group(['middleware' => ['role:cashier']], function () {
    Route::prefix('/transaction')
        ->name('transaction')
        ->group(function(){
            Route::get('/', [TransactionController::class, 'index']);
            Route::post('/', [TransactionController::class, 'store'])->name('.store');
        }
    );
});

Route::group(['middleware' => ['role:owner|manager']], function () {
    Route::prefix('/transaction')
        ->name('transaction')
        ->group(function(){
            Route::get('/data', [TransactionController::class, 'data'])->name('.data');
            Route::get('/data/{id}', [TransactionController::class, 'branchData'])->name('.data.view');
            Route::post('/print', [TransactionController::class, 'print'])->name('.print');
            Route::post('/print/all', [TransactionController::class, 'printAll'])->name('.print.all');
        }
    );
    Route::prefix('/item')
        ->name('item')
        ->group(function(){
            Route::get('/data', [WarehouseController::class, 'data'])->name('.data');
            Route::get('/data/{id}', [WarehouseController::class, 'branchData'])->name('.data.view');
            Route::get('/data/{id}/print', [WarehouseController::class, 'printBranchData'])->name('.data.view.print');
        }
    );
});


// Route::group(['middleware' => ['role:supervisor']],function () {
//     Route::get('/supervisor/dashboard', [SupervisorController::class, 'index'])->name('supervisor.dashboard');
//     Route::get('/supervisor/tasks', [SupervisorController::class, 'manageTasks'])->name('supervisor.manageTasks'); // Mengelola tugas karyawan
//     Route::get('/supervisor/daily-report', [SupervisorController::class, 'dailyReport'])->name('supervisor.dailyReport'); // Pemantauan kegiatan harian
// });

// // Routes untuk Warehouse Staff
// Route::group(['middleware' => ['role:supervisor']],function () {
//     Route::get('/warehouse/dashboard', [WarehouseStaffController::class, 'index'])->name('warehouse.dashboard');
//     Route::get('/warehouse/receive-items', [WarehouseStaffController::class, 'receiveItems'])->name('warehouse.receiveItems'); // Penerimaan barang
//     Route::get('/warehouse/ship-items', [WarehouseStaffController::class, 'shipItems'])->name('warehouse.shipItems'); // Pengiriman barang
// });

// // Routes untuk Cashier
// Route::group(['middleware' => ['role:supervisor']],function () {
//     Route::get('/cashier/dashboard', [CashierController::class, 'index'])->name('cashier.dashboard');
//     Route::get('/cashier/transaction', [CashierController::class, 'transaction'])->name('cashier.transaction'); // Transaksi penjualan
//     Route::get('/cashier/history', [CashierController::class, 'history'])->name('cashier.history'); // Riwayat transaksi
// });

require __DIR__.'/auth.php';
