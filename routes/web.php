<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\UnauthorisedPagesController::class, 'homepage'])->name('homepage');
Route::get('/about-us', [App\Http\Controllers\UnauthorisedPagesController::class, 'about'])->name('about');
Route::get('/blogs', [App\Http\Controllers\UnauthorisedPagesController::class, 'blogs'])->name('blogs');
Route::get('/blogs/blog-detail', [App\Http\Controllers\UnauthorisedPagesController::class, 'blogDetails'])->name('blog-detail');
Route::get('/safety', [App\Http\Controllers\UnauthorisedPagesController::class, 'safety'])->name('safety');
Route::get('/career', [App\Http\Controllers\UnauthorisedPagesController::class, 'careers'])->name('career');
Route::get('/terms-and-conditions', [App\Http\Controllers\UnauthorisedPagesController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [App\Http\Controllers\UnauthorisedPagesController::class, 'privacy'])->name('privacy');
Route::get('/map', [App\Http\Controllers\UnauthorisedPagesController::class, 'map'])->name('map');
Route::get('/detail', [App\Http\Controllers\UnauthorisedPagesController::class, 'detail'])->name('detail');
Route::get('/chat', [App\Http\Controllers\UnauthorisedPagesController::class, 'chat'])->name('chat');
Route::get('/host-dashboard', [App\Http\Controllers\HostController::class, 'dashboard'])->name('dashboard');
Route::get('/host-profile', [App\Http\Controllers\HostController::class, 'hostProfile'])->name('hostProfile');
Route::get('/create-listing', [App\Http\Controllers\HostController::class, 'createListing'])->name('createListing');
Route::get('/edit-host-profile', [App\Http\Controllers\HostController::class, 'editHostProfile'])->name('editHostProfile');
Route::get('/host-profile-setting', [App\Http\Controllers\HostController::class, 'profilesetting'])->name('profilesetting');
Route::get('/host-notifications', [App\Http\Controllers\HostController::class, 'hostNotification'])->name('hostNotification');
Route::get('/host-booking', [App\Http\Controllers\HostController::class, 'hostbooking'])->name('hostbooking');
Route::get('/host-all-listing', [App\Http\Controllers\HostController::class, 'alllisting'])->name('alllisting');
Route::get('/host-saved-listing', [App\Http\Controllers\HostController::class, 'savedlisting'])->name('savedlisting');
Route::get('/host-liked-listing', [App\Http\Controllers\HostController::class, 'likedlisting'])->name('likedlisting');
Route::get('/sample', [App\Http\Controllers\HostController::class, 'sample'])->name('sample');
Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'admindashboard'])->name('admindashboard');
Route::get('/host-revenue', [App\Http\Controllers\HostController::class, 'revenue'])->name('revenue');
Route::get('/host-net-income', [App\Http\Controllers\HostController::class, 'netincome'])->name('netincome');
Route::get('/host-pay-details', [App\Http\Controllers\HostController::class, 'paydetail'])->name('paydetail');
Route::get('/change-password', [App\Http\Controllers\HostController::class, 'changepassword'])->name('changepassword');
Route::get('/host/edit-payment-setting', [App\Http\Controllers\HostController::class, 'editPaymentSetting'])->name('editPaymentSetting');

Route::get('/admin-profile', [App\Http\Controllers\AdminController::class, 'adminProfile'])->name('adminProfile');
Route::get('/admin-create-listing', [App\Http\Controllers\AdminController::class, 'admincreateListing'])->name('admincreateListing');
Route::get('/edit-admin-profile', [App\Http\Controllers\AdminController::class, 'editadminProfile'])->name('editadminProfile');
Route::get('/admin-notifications', [App\Http\Controllers\AdminController::class, 'adminNotification'])->name('adminNotification');
Route::get('/admin-booking', [App\Http\Controllers\AdminController::class, 'adminbooking'])->name('adminbooking');
Route::get('/admin-all-listing', [App\Http\Controllers\AdminController::class, 'alllisting'])->name('alllistingadmin');
Route::get('/admin-saved-listing', [App\Http\Controllers\AdminController::class, 'savedlisting'])->name('savedlistingadmin');
Route::get('/admin-liked-listing', [App\Http\Controllers\AdminController::class, 'likedlisting'])->name('likedlistingadmin');
Route::get('/admin-revenue', [App\Http\Controllers\AdminController::class, 'revenue'])->name('revenueadmin');
Route::get('/admin-net-income', [App\Http\Controllers\AdminController::class, 'netincome'])->name('netincomeadmin');
Route::get('/admin-pay-details', [App\Http\Controllers\AdminController::class, 'paydetail'])->name('paydetailadmin');
Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
Route::get('/cms', [App\Http\Controllers\AdminController::class, 'cmsListing'])->name('cms');
Route::get('/add-new-page', [App\Http\Controllers\AdminController::class, 'addNewPage'])->name('add-new-page');
Route::get('/admin-change-password', [App\Http\Controllers\AdminController::class, 'adminchangepassword'])->name('adminchangepassword');
Route::get('/admin-profile-setting', [App\Http\Controllers\AdminController::class, 'adminprofilesetting'])->name('adminprofilesetting');






