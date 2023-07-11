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
