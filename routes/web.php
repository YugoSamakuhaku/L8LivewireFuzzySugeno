<?php

use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\User\Index;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;

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
    Route::get('/login', Login::class)->name('auth.login');
});

Route::group(['middleware' => 'auth'], function (): void {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show');

    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::get('/role/edit/{role}', [RoleController::class, 'edit'])->name('role.edit');
    Route::get('/role/show/{role}', [RoleController::class, 'show'])->name('role.show');

    Route::get('/permission', [PermissionController::class, 'index'])->name('permission.index');

    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
    Route::get('/supplier/edit/{supplier}', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::get('/supplier/show/{supplier}', [SupplierController::class, 'show'])->name('supplier.show');
});
