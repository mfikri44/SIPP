<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratKelahiranController;
use App\Http\Controllers\SuratKematianController;
use App\Http\Controllers\SuratKeteranganController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratTerimaController;
use App\Http\Controllers\SuratRalatController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;
use App\Http\Middleware\KepalaDesa;

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

//Route Admin   

Route::group(['middleware' => 'kepala_desa'],function(){

    Route::get('home', [AdminController::class, 'kepala'])->name('home');  
   
});

Route::group(['middleware' => 'admin'],function(){

    Route::get('admin', [AdminController::class, 'kepala'])->name('admin');
    Route::prefix('surat')->group(function(){
        Route::get('data/{id}', [SuratMasukController::class, 'data_pending']);
        Route::get('data-selesai/{id}', [SuratMasukController::class, 'data_selesai']);
        Route::get('data-ralat/{id}', [SuratMasukController::class, 'data_ralat']);
        Route::post('edit-bh/{id}', [SuratMasukController::class, 'stat_update_bh']);
        Route::post('edit-pd/{id}', [SuratMasukController::class, 'stat_update_pd']);
        Route::post('edit-rl/{id}', [SuratMasukController::class, 'stat_update_rl']);

        Route::post('edit-bh-kmt/{id}', [SuratMasukController::class, 'stat_update_bh_kmt']);
        Route::post('edit-pd-kmt/{id}', [SuratMasukController::class, 'stat_update_pd_kmt']);
        Route::post('edit-rl-kmt/{id}', [SuratMasukController::class, 'stat_update_rl_kmt']);

        Route::post('edit-bh-ket/{id}', [SuratMasukController::class, 'stat_update_bh_ket']);
        Route::post('edit-pd-ket/{id}', [SuratMasukController::class, 'stat_update_pd_ket']);
        Route::post('edit-rl-ket/{id}', [SuratMasukController::class, 'stat_update_rl_ket']);

        Route::get('delete/{id}', [SuratMasukController::class, 'delete']);
        Route::get('delete-kmt/{id}', [SuratMasukController::class, 'delete_kmt']);
        Route::get('delete-ket/{id}', [SuratMasukController::class, 'delete_ket']);

        Route::get('detail/{id}', [SuratMasukController::class, 'detail']);
        Route::get('detail-kmt/{id}', [SuratMasukController::class, 'detail_kmt']);
        Route::get('detail-ket/{id}', [SuratMasukController::class, 'detail_ket']);


        Route::get('file/{id}', [SuratKelahiranController::class, 'file']);
        Route::get('file-kmt/{id}', [SuratKematianController::class, 'file']);
        Route::get('file-ket/{id}', [SuratKeteranganController::class, 'file']);
        
    });

    Route::prefix('user-data')->group(function(){
        Route::get('/', [AdminController::class, 'all']);
        Route::get('create', [AdminController::class, 'add']);
        Route::post('tambah', [AdminController::class, 'tambah']);
        Route::get('edit/{id}', [AdminController::class, 'edit']);
        Route::post('edit/{id}', [AdminController::class, 'update']);
        Route::get('delete/{id}', [AdminController::class, 'delete']);
    });
});

Route::group(['middleware' => 'user'],function(){

    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::prefix('surat-kelahiran')->group(function(){
        Route::get('/{id}', [SuratKelahiranController::class, 'index']);
        Route::get('/add/create', [SuratKelahiranController::class, 'create']);
        Route::post('create', [SuratKelahiranController::class, 'insert']);
        Route::get('edit/{id}', [SuratKelahiranController::class, 'edit']);
        Route::post('edit/{id}', [SuratKelahiranController::class, 'update']);
        Route::get('delete/{id}', [SuratKelahiranController::class, 'delete']);
        Route::get('detail/{id}', [SuratKelahiranController::class, 'detail']);
        Route::get('file/{id}', [SuratKelahiranController::class, 'file']);
    });
    
    Route::prefix('surat-kematian')->group(function(){
        Route::get('/{id}', [SuratKematianController::class, 'index']);
        Route::get('/add/create', [SuratKematianController::class, 'create']);
        Route::post('create', [SuratKematianController::class, 'insert']);
        Route::get('edit/{id}', [SuratKematianController::class, 'edit']);
        Route::post('edit/{id}', [SuratKematianController::class, 'update']);
        Route::get('delete/{id}', [SuratKematianController::class, 'delete']);
        Route::get('detail/{id}', [SuratKematianController::class, 'detail']);
        Route::get('file/{id}', [SuratKematianController::class, 'file']);
    });   

     Route::prefix('surat-keterangan')->group(function(){
        Route::get('/{id}', [SuratKeteranganController::class, 'index']);
        Route::get('/add/create', [SuratKeteranganController::class, 'create']);
        Route::post('create', [SuratKeteranganController::class, 'insert']);
        Route::get('edit/{id}', [SuratKeteranganController::class, 'edit']);
        Route::post('edit/{id}', [SuratKeteranganController::class, 'update']);
        Route::get('delete/{id}', [SuratKeteranganController::class, 'delete']);
        Route::get('detail/{id}', [SuratKeteranganController::class, 'detail']);
        Route::get('file/{id}', [SuratKeteranganController::class, 'file']);
    });   
});
