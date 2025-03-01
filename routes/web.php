<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ChartController;

//Users Routes
Route::match(['post','get'],'/',[UsersController::class,'login'])->name('login');
// Routes with Auth Middleware
Route::middleware('auth')->group(function () {
    Route::get('/logout',[UsersController::class,'logout'])->name('users.logout');
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    // Settings
    Route::match(['post','get'],'/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::match(['post','get'],'/template', [DashboardController::class, 'template'])->name('template');

    // User Management
    Route::get('/affiliates', [UsersController::class, 'affiliates'])->name('admin.users.affiliates');
    Route::post('/add-affiliate', [UsersController::class, 'addAffiliates'])->name('admin.users.addaffiliates');
    Route::get('/update-status/{id}', [UsersController::class, 'updateStatus'])->name('admin.affiliate.status');
    Route::get('/advertiser', [UsersController::class, 'advertisers'])->name('admin.users.advertisers');

    // Reports
    Route::get('/statistics', [ReportsController::class, 'statistics'])->name('admin.report.statistics');
    Route::get('/report-permission', [ReportsController::class, 'permission'])->name('admin.report.permission');
    Route::match(['post','get'],'/report-status', [ReportsController::class, 'reportStatus'])->name('report.status');
    Route::match(['post','get'],'/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::post('/export-report', [ReportsController::class, 'exportReport'])->name('report.export');

    // Apps
    Route::match(['post','get'],'/app-blocker', [UsersController::class, 'appBlocker'])->name('admin.users.appblocker');
    Route::get('/getAffiliaetApp/{id?}', [ReportsController::class, 'getAffiliaetApp'])->name('getAffiliaetApp');
    
    // Chart Data
    Route::get('/chart-data', [ChartController::class, 'chartData'])->name('chart.data');
    Route::get('/filterGroup/{type?}', [ReportsController::class, 'filterGroup'])->name('filterGroup');
});
