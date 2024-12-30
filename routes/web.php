<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleandPermissionController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\SystemManageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainview', function(){
    return view('Layout.app');
});

Route::get('/mainview/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/mainview/pos',[PosController::class, 'index'])->name('pos.index');
Route::get('/mainview/supplier',[SupplierController::class, 'index'])->name('supplier.index');
Route::get('/mainview/salesreport',[SalesReportController::class, 'index'])->name('salesreport.index');
Route::get('/mainview/usermanagement',[UserManagementController::class, 'index'])->name('usermanagement.index');
Route::get('/mainview/roleandpermission',[RoleandPermissionController::class, 'index'])->name('roleandpermission.index');
Route::get('mainview/systemmanage',[SystemManageController::class, 'index'])->name('systemmanage.index');

// PRODUCT CONTROLLERS
Route::get('/mainview/product',[ProductController::class, 'index'])->name('product.index');

// END OF PRODUCT CONTROLLERS