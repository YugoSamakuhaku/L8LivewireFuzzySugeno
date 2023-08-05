<?php

declare(strict_types=1);

use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RequestSaleController;
use App\Http\Controllers\MasterProductController;
use App\Http\Controllers\MasterInggridientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function (): void {
    Route::get('login', Login::class)->name('auth.login');
});

Route::group(['middleware' => 'auth'], function (): void {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('user/show/{user}', [UserController::class, 'show'])->name('user.show');

    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
    Route::get('role/edit/{role}', [RoleController::class, 'edit'])->name('role.edit');
    Route::get('role/show/{role}', [RoleController::class, 'show'])->name('role.show');

    Route::get('permission', [PermissionController::class, 'index'])->name('permission.index');

    Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::get('supplier/edit/{supplier}', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::get('supplier/show/{supplier}', [SupplierController::class, 'show'])->name('supplier.show');

    Route::get('master_inggridient', [MasterInggridientController::class, 'index'])->name('master_inggridient.index');
    Route::get('master_inggridient/create', [MasterInggridientController::class, 'create'])->name('master_inggridient.create');
    Route::get('master_inggridient/edit/{master_inggridient}', [MasterInggridientController::class, 'edit'])->name('master_inggridient.edit');
    Route::get('master_inggridient/show/{master_inggridient}', [MasterInggridientController::class, 'show'])->name('master_inggridient.show');

    Route::get('master_product', [MasterProductController::class, 'index'])->name('master_product.index');
    Route::get('master_product/create', [MasterProductController::class, 'create'])->name('master_product.create');
    Route::get('master_product/edit/{master_product}', [MasterProductController::class, 'edit'])->name('master_product.edit');
    Route::get('master_product/show/{master_product}', [MasterProductController::class, 'show'])->name('master_product.show');

    Route::get('purchase', [PurchaseController::class, 'index'])->name('purchase.index');
    Route::get('purchase/create', [PurchaseController::class, 'create'])->name('purchase.create');
    Route::get('purchase/show/{purchase}', [PurchaseController::class, 'show'])->name('purchase.show');

    Route::get('sale', [RequestSaleController::class, 'index'])->name('sale.index');
    Route::get('sale/create', [RequestSaleController::class, 'create'])->name('sale.create');
    Route::get('sale/show/{request_sale}', [RequestSaleController::class, 'show'])->name('sale.show');
});
