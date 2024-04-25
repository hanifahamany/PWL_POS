<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Auth;
use Monolog\Level;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/tambah', [LevelController::class, 'tambah']);
Route::post('/level/tambah_simpan', [LevelController::class, 'tambah_simpan']);
Route::get('/level/tambah', [LevelController::class, 'tambah'])->name('level.tambah');
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/save_edit/{id}', [KategoriController::class, 'save_edit']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'deleteKtg']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::resource('m_user', POSController::class);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

//Kita atur juga untuk middleware menggunakan group pada routing
//didalamnya terdapat group untuk mengecek kondisi login
//jika user  yang ingin login merupakan admin maka akan diarahkan ke AdminController
//jika user yang login merupakan manager maka akan diarahkan ke UserController

Route::group(['middleware'=> ['auth']], function(){
    Route::group(['middleware'=>['cek_login:1']], function(){
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware'=>['cek_login:2']], function(){
        Route::resource('manager', ManagerController::class);
    });
});