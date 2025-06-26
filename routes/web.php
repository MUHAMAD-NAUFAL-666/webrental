<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajemenBarangController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Rute Otentikasi untuk Tamu
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('admin.auth.sign-in');
    })->name('sign-in');

    Route::get('/sign-up', function () {
        return view('admin.auth.sign-up');
    })->name('sign-up');

    Route::post('/sign-up', [RegisterController::class, 'register'])->name('sign-up');
    Route::post('/sign-in', [LoginController::class, 'login'])->name('sign-in');

    Route::get('/verifikasi-otp', function () {
        return view('admin.auth.verifikasi-otp');
    })->name('admin.auth.verifikasi-otp');
});

Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');


Route::get('/welcome', function () {
    return view('customer.welcome');
})->name('customer.welcome');

Route::get('/welcome', [WelcomeController::class, 'index'])->name('customer.welcome');
// Rute Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Rute Verifikasi Email
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('admin.dashboard');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware('throttle:6,1')->name('verification.send');
});

// Rute Lupa Password
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
Route::post('/verify-code', [ForgotPasswordController::class, 'verifyCode'])->name('verify.code');



// Rute Admin
Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    // menghitung jumlah data
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route baru untuk realtime data
Route::get('/dashboard/realtime-data', [DashboardController::class, 'getRealtimeData'])->name('dashboard.realtime');
Route::get('/dashboard/monthly-revenue', [DashboardController::class, 'getMonthlyRevenue'])->name('dashboard.revenue');
Route::get('/dashboard/popular-items', [DashboardController::class, 'getPopularItems'])->name('dashboard.popular');
    // Rute Manajemen Pengguna
    Route::get('/manajemen-pengguna', [DashboardController::class, 'manajemenPengguna'])->name('manajemen-pengguna');
    // Rute penyewaan
    Route::get('/manajemen-penyewaan', [PenyewaanController::class, 'index'])->name('manajemen-penyewaan');


    Route::post('/konfirmasi-pembayaran/{id}', [PembayaranController::class, 'konfirmasiPembayaran'])->name('konfirmasi.pembayaran');

    Route::get('/export-pdf', [LaporanController::class, 'exportPDF'])->name('export.pdf');
    Route::get('/export-excel', [LaporanController::class, 'exportExcel'])->name('export.excel');
    Route::get('/export-transaksi-pdf/{id}', [PembayaranController::class, 'exportTransaksiPDF'])->name('export.transaksi.pdf');
    Route::get('/export-transaksi-excel/{id}', [PembayaranController::class, 'exportTransaksiExcel'])->name('export.transaksi.excel');
    Route::get('/cetak-invoice/{id}', [PembayaranController::class, 'cetakInvoice'])->name('cetak.invoice');




    Route::get('/pengaturan', function () {
        return view('admin.pengaturan');
    })->name('admin.pengaturan');

    Route::get('/pembayaran', function () {
        return view('admin.pembayaran');
    })->name('admin.pembayaran');

    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');




    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');
    Route::get('about', function () {
        return view('customer.about');
    })->name('customer.about');



    Route::get('/manajemen-barang', function () {
        return view('admin.manajemen-barang');
    })->name('manajemen-barang');
});
Route::get('/customer/payment', function () {
    return view('customer.payment');;
})->name('customer.payment');

// Socialite untuk Google Login
Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('auth.google.callback');
Route::get('/auth/google/verify', [SocialiteController::class, 'verify'])->name('auth.google.verify');

//tambah produk
Route::get('/manajemen-barang', [ManajemenBarangController::class, 'index'])->name('manajemen-barang');
Route::post('/tambah-laptop', [ManajemenBarangController::class, 'tambahLaptop'])->name('tambah-laptop');
Route::post('/tambah-handphone', [ManajemenBarangController::class, 'tambahHandphone'])->name('tambah-handphone');

//edit produk
Route::post('/update-handphone/{id}', [ManajemenBarangController::class, 'updateHandphone'])->name('update.handphone');
Route::post('/update-laptop/{id}', [ManajemenBarangController::class, 'updateLaptopData'])->name('update.laptop');
//delete produk
Route::get('/delete-laptop/{id}', [ManajemenBarangController::class, 'deleteLaptop'])->name('delete-laptop');
Route::get('/delete-handphone/{id}', [ManajemenBarangController::class, 'deleteHandphone'])->name('delete-handphone');

Route::get('/delete-penyewaan/{id_sewa}', [PenyewaanController::class, 'deletePenyewaan'])->name('delete-penyewaan');


    // Rute penyewaan barang
    Route::post('/penyewaan/store', [PenyewaanController::class, 'store'])->name('penyewaan.store');

    Route::put('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
