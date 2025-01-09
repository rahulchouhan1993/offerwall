<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Affiliate\AppsController;
use App\Http\Controllers\Affiliate\ChartController;
use App\Http\Controllers\Affiliate\DashboardController;
use App\Http\Controllers\Affiliate\PaymentsController;
use App\Http\Controllers\Affiliate\ReportsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminReportsController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\UsersController;

//Users Routes
Route::match(['post','get'],'/',[UsersController::class,'login'])->name('login');
// Routes with Auth Middleware
Route::middleware('auth')->group(function () {
    Route::get('/logout',[UsersController::class,'logout'])->name('users.logout');
    // Admin Routes
    Route::prefix('admin')->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');

        // Settings
        Route::match(['post','get'],'/settings', [AdminDashboardController::class, 'setting'])->name('admin.dashboard.setting');

        // User Management
        Route::get('/affiliates', [AdminUsersController::class, 'affiliates'])->name('admin.users.affiliates');
        Route::post('/add-affiliate', [AdminUsersController::class, 'addAffiliates'])->name('admin.users.addaffiliates');
        Route::get('/update-status/{id}', [AdminUsersController::class, 'updateStatus'])->name('admin.affiliate.status');
        Route::get('/advertiser', [AdminUsersController::class, 'advertisers'])->name('admin.users.advertisers');

        // Reports
        Route::get('/statistics', [AdminReportsController::class, 'statistics'])->name('admin.report.statistics');
        Route::get('/report-permission', [AdminReportsController::class, 'permission'])->name('admin.report.permission');

        // Apps
        Route::match(['post','get'],'/app-blocker', [AdminUsersController::class, 'appBlocker'])->name('admin.users.appblocker');
    });

    // Affiliate Routes
    Route::prefix('affiliate')->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // Settings
        Route::get('/settings', [DashboardController::class, 'setting'])->name('dashboard.setting');

        // Payments
        Route::get('/now-payments', [PaymentsController::class, 'index'])->name('payment.index');

        // Reports
        Route::get('/statistics', [ReportsController::class, 'statistics'])->name('report.statistics');
        Route::get('/conversions', [ReportsController::class, 'conversions'])->name('report.conversions');
        Route::get('/postbacks', [ReportsController::class, 'postbacks'])->name('report.postbacks');
        Route::get('/exported-reports', [ReportsController::class, 'exported'])->name('report.exported');

        // Apps
        Route::get('/apps', [AppsController::class, 'index'])->name('apps.index');
        Route::get('/add-app', [AppsController::class, 'add'])->name('apps.add');
        Route::get('/test-postback', [AppsController::class, 'testPostback'])->name('apps.testpostback');
        Route::get('/integration', [AppsController::class, 'integration'])->name('apps.integration');

        // Chart Data
        Route::get('/chart-data', [ChartController::class, 'chartData'])->name('chart.data');
    });
});
