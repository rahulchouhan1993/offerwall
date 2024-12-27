<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Affiliate\AppsController;
use App\Http\Controllers\Affiliate\ChartController;
use App\Http\Controllers\Affiliate\DashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Affiliate\PaymentsController;
use App\Http\Controllers\Affiliate\ReportsController;
use App\Http\Controllers\Admin\AdminReportsController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\UsersController;

//Users Routes
Route::get('/',[UsersController::class,'login'])->name('login');
Route::get('/admin/affiliates',[AdminUsersController::class,'affiliates'])->name('admin.users.affiliates');
Route::get('/admin/add-affiliate',[AdminUsersController::class,'addAffiliates'])->name('admin.users.addaffiliates');
Route::get('/admin/advertiser',[AdminUsersController::class,'advertisers'])->name('admin.users.advertisers');


//Dashboard Routes
Route::get('/affiliate/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('/admin/dashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard.index');

//Settings Routes
Route::get('/affiliate/settings',[DashboardController::class,'setting'])->name('dashboard.setting');
Route::get('/admin/settings',[AdminDashboardController::class,'setting'])->name('admin.dashboard.setting');

//Payment Routes
Route::get('/affiliate/now-payments',[PaymentsController::class,'index'])->name('payment.index');

//Report Routes
Route::get('/affiliate/statistics',[ReportsController::class,'statistics'])->name('report.statistics');
Route::get('/admin/statistics',[AdminReportsController::class,'statistics'])->name('admin.report.statistics');
Route::get('/affiliate/conversions',[ReportsController::class,'conversions'])->name('report.conversions');
Route::get('/affiliate/postbacks',[ReportsController::class,'postbacks'])->name('report.postbacks');
Route::get('/affiliate/exported-reports',[ReportsController::class,'exported'])->name('report.exported');
Route::get('/admin/report-permission',[AdminReportsController::class,'permission'])->name('admin.report.permission');

//Apps Routes
Route::get('/admin/app-blocker',[AdminUsersController::class,'appBlocker'])->name('admin.users.appblocker');
Route::get('/affiliate/apps',[AppsController::class,'index'])->name('apps.index');
Route::get('/affiliate/add-app',[AppsController::class,'add'])->name('apps.add');
Route::get('/affiliate/test-postback',[AppsController::class,'testPostback'])->name('apps.testpostback');

Route::get('/chart-data', [ChartController::class, 'chartData'])->name('chart.data');
// Route::get('/', function () {
//     return view('welcome');
// });
