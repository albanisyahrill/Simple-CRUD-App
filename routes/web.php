<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('/', 'login')->name('login');
	Route::post('/', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::controller(OrderController::class)->prefix('transaksi')->group(function () {
		Route::get('', 'index')->name('transaction');
		Route::post('tambah', 'simpan')->name('transaction.simpan');
	});

	Route::controller(HistoryController::class)->prefix('riwayat')->group(function (){
		Route::get('', 'index')->name('history');
		Route::get('/search', 'search')->name('search');
	});

	Route::controller(RevenueController::class)->prefix('penghasilan')->group(function (){
		Route::get('', 'index')->name('revenue');

		Route::get('/search', 'search')->name('search');
		//Route::get('/search', 'SearchController@index')->name('search');
	});
});

