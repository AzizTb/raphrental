<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverUserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilUserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Auth::routes(['register' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //Hanya untuk role admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

//Hanya untuk role pengguna
// Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('driver', function () {
//         return view('driver.index');
//     })->middleware(['role:admin|pengguna']);

// });

// Route::resource('admin/driver', DriverController::class)->middleware(['role:admin']);
// Route::resource('admin/penyewa', PenyewaController::class)->middleware(['role:admin']);
// Route::resource('admin/mobil', MobilController::class)->middleware(['role:admin']);
// Route::resource('admin/sewa', SewaController::class)->middleware(['role:admin']);
// Route::resource('admin/transaksi', TransaksiController::class)->middleware(['role:admin']);
// Route::resource('admin/jenis', JenisMobil::class)->middleware('auth');

Route::prefix('RentalMobil')->group(function () {
    Route::get('beranda', function () {
        return view('welcome');
    });

    Route::resource('mobiluser' ,MobilUserController::class)->middleware('auth');
    Route::resource('driveruser', DriverUserController::class)->middleware('auth');

    Route::get('sewa', function () {
        return view('user.sewa');
    })->middleware('auth');
    Route::get('riwayat', function () {
        return view('user.riwayat');
    })->middleware('auth');

    // login
    Route::get('masuk', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('masuk', [LoginController::class, 'authenticate']);
    Route::post('keluar', [LoginController::class, 'logout']);

    Route::resource('/registrasi', UserController::class)->middleware('guest');

    //admin
    Route::get('admin/dashboard', function(){
        return view('admin.index');
    })->middleware('admin');

    Route::resource('admin/driver', DriverController::class)->middleware('admin');
    Route::resource('admin/penyewa', PenyewaController::class)->middleware('admin');
    Route::resource('admin/mobil', MobilController::class)->middleware('admin');
    Route::resource('admin/sewa', SewaController::class)->middleware('admin');
    Route::resource('admin/jenis', JenisMobil::class)->middleware('admin');
    // Route::resource('admin/transaksi', TransaksiController::class)->middleware('admin');
} );

