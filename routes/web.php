<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/edit-paket', function () {
    return view('user/edit-paket');
});

Route::get('/tambah-paket', function () {
    return view('user/tambah-paket');
});

Route::get('/detail-paket', function () {
    return view('user/detail-paket');
});

Route::get('/admin-home', function () {
    return view('admin/admin-home');
});

Route::get('/admin-detailpaket', function () {
    return view('admin/admin-detailpaket');
});

Route::get('/admin-tambahpaket', function () {
    return view('admin/admin-tambahpaket');
});

Route::get('/admin-editpaket', function () {
    return view('admin/admin-editpaket');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
