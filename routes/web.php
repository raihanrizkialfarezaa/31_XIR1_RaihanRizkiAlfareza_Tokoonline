<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\History;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Keranjang;
use App\Http\Livewire\ProductLiga;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SheetDBController;
use App\Http\Controllers\DashboardController;

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

Auth::routes();

Route::get('/', Home::class)->name('home');
Route::get('/products', ProductIndex::class)->name('products');
Route::get('/products/liga/{id}', ProductLiga::class)->name('products.liga');
Route::get('/products/{id}', ProductDetail::class)->name('products.detail');
Route::get('/keranjang', Keranjang::class)->name('keranjang');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/history', History::class)->name('history');
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('admin/product', ProductController::class)->middleware('auth');
Route::resource('admin/liga', LigaController::class)->middleware('auth');
Route::resource('admin/status', StatusController::class)->middleware('auth');
Route::resource('admin/pesanan', PesananController::class)->middleware('auth');
Route::get('/get', [SheetDBController::class, 'get']);
Route::get('/create', [SheetDBController::class, 'create']);