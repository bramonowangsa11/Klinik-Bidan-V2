<?php

use App\Livewire\KBFilter;
use App\Livewire\AncFilter;
use App\Livewire\PasienFilter;
use App\Livewire\ImunisasiFilter;
use App\Livewire\ReservasiFilter;
use App\Http\Controllers\Imunisasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KbController;
use App\Http\Controllers\AncController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\CobaAncController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\CobaReservasiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/',[SessionController::class,'index'])->name('login');
    // routes tes dashboar admin
    // Route::get('/dashboard-admin', function () {
    //     return view('layouts.admin.dashboard-admin');
    // });
    Route::get('/daftar', function () {
        return view('layouts.daftar');
    });
    Route::post('/daftar', [UserController::class, 'daftar'])->name('daftar.store'); 
    Route::post('/login',[SessionController::class,'login']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/sudah-login',[SessionController::class,'sudahLogin'])->name('sudah.login');
    // ADMIN IMUNISASI
    Route::get('/admin',ImunisasiFilter::class)->middleware('userAkses:admin');
    Route::get('/input-table',[ImunisasiController::class,'inputImunisasi'])->middleware('userAkses:admin');
    Route::post('/imunisasi',[ImunisasiController::class,'store'])->middleware('userAkses:admin')->name('imunisasi.store');
    Route::get('/imunisasi/{id}', [ImunisasiController::class,'showByid'])->name('imunisasi.show');
    Route::delete('/imunisasi/{id}', [ImunisasiController::class,'destroy'])->name('imunisasi.destroy')->middleware('userAkses:admin');
    Route::put('/imunisasi/{id}', [ImunisasiController::class,'update'])->name('imunisasi.update')->middleware('userAkses:admin');
    Route::post('imunisasi/search',[ImunisasiController::class,'search'])->name('imunisasi.search')->middleware('userAkses:admin');
    Route::get('imunisasi-nik',[ImunisasiController::class,'inputnik']);
    Route::get('/cetak-imunisasi',[ImunisasiController::class,'LaporanBulanan'])->name('cetak-imunisasi');
    
    // ADMIN KB
    Route::get('/input-kb',[KbController::class,'inputNik'])->middleware('userAkses:admin');
    Route::get('/search-nik',[PasienController::class,'findBynik'])->middleware('userAkses:admin');
    Route::get('/form-input-kb',[KbController::class,'formKb'])->middleware('userAkses:admin');
    Route::post('/kb',[KbController::class,'store'])->middleware('userAkses:admin')->name('kb.store');
    Route::get('/data-kb',KBFilter::class)->middleware('userAkses:admin');   
    Route::get('/kb/{id}',[KbController::class,'showByid'])->name('kb.showByid');
    Route::put('/kb/{id}',[KbController::class,'update'])->middleware('userAkses:admin')->name('kb.update');
    Route::get('/cetak-kb',[KbController::class,'LaporanBulanan'])->name('cetak-kb');
    Route::delete('/kb/{id}',[KbController::class,'destroy'])->name('kb.destroy')->middleware('userAkses:admin');

    // ADMIN BUMIL
    Route::post('/input-bumil',[AncController::class,'store'])->name('bumil.store')->middleware('userAkses:admin');
    Route::put('/bumil/{id}',[AncController::class,'update'])->name('bumil.update')->middleware('userAkses:admin');
    Route::post('bumil/search',[AncController::class,'search'])->name('bumil.search')->middleware('userAkses:admin');
    Route::get('/ibu-hamil',AncFilter::class)->middleware('userAkses:admin');
    Route::get('/bumil',[AncController::class,'inputnik'])->middleware('userAkses:admin')->name('bumil.nik');
    Route::delete('/bumil/{id}',[AncController::class,'destroy'])->name('bumil.delete')->middleware('userAkses:admin');
    Route::get('/cetak-bumil',[AncController::class,'LaporanBulanan'])->name('cetak-bumil');
    Route::get('/detail-bumil/{id}',[AncController::class,'showid'])->name('bumil.showid');

    //Admin Reservasi
    Route::get('/reservasi',[ReservasiController::class,'sesibyDate'])->middleware('userAkses:pasien');
    Route::post('/reservasi',[ReservasiController::class,'store']);
    Route::get('/lihat-reservasi-user',[ReservasiController::class,'index'])->middleware('userAkses:pasien');
    Route::get('daftar-reservasi',ReservasiFilter::class)->middleware('userAkses:admin');
    Route::get('reservasi-admin',[AdminController::class,'sesiByDate'])->middleware('userAkses:admin');
    Route::delete('reservasi/{id}',[ReservasiController::class,'destroy'])->name('reservasi.delete');
    Route::get('/today-reservation',[ReservasiController::class,'todayReservation']);
    Route::get('/admin-reservasi', function () {
        return view('layouts.admin.admin-reservasi');
    })->middleware('userAkses:admin');

    //DATA PASIEN
    Route::get('/tambah-pasien',[PasienController::class,'tambahPasien'])->middleware('userAkses:admin');
    Route::post('/pasien',[PasienController::class,'daftar'])->middleware('userAkses:admin')->name('pasien.store');
    Route::get('/data-pasien',PasienFilter::class)->name('pasien.list')->middleware('userAkses:admin');
    Route::get('/pasien/{id}',[PasienController::class,''])->name('pasien.show')->middleware('userAkses:admin');
    Route::get('tes1',ReservasiFilter::class)->name('tes1')->middleware('userAkses:admin');
    //USER KB
   
    Route::get('/daftar-imunisasi', function () {
        return view('layouts.admin.daftar-imunisasi');
    });
    Route::get('/daftar-bumil', function () {
        return view('layouts.admin.daftar-bumil');
    });

    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('home');
    Route::get('/logout',[SessionController::class,'logout']);
    Route::get('/dashboard-user',[UserController::class,'index'])->name('dashboard.user')->middleware('userAkses:pasien');
    Route::get('/riwayat-pasien/{id}',[PasienController::class,'riwayatByid'])->name('riwayat-pasien');
    Route::get('/riwayat-imunisasi/{id}',[ImunisasiController::class,'riwayat'])->name('admin.riwayatImunisasi')->middleware('userAkses:admin');
    Route::get('/riwayat-anc/{id}',[AncController::class,'riwayat'])->name('admin.riwayatAnc')->middleware('userAkses:admin');
    Route::get('/riwayat-kb/{id}',[KbController::class,'riwayat'])->name('admin.riwayatKb')->middleware('userAkses:admin');
    Route::get('/riwayat-kb',[PasienController::class,'riwayatKb'])->name('riwayat')->middleware('userAkses:pasien');
    Route::get('/riwayat-imunisasi',[PasienController::class,'riwayatImunisasi'])->name('riwayat')->middleware('userAkses:pasien');
    Route::get('/riwayat-anc',[PasienController::class,'riwayatBumil'])->name('riwayat')->middleware('userAkses:pasien');
    Route::get('/pasien',[PasienController::class,'index'])->middleware('userAkses:pasien');
    Route::get('/pengguna-terdaftar',[UserController::class,'GetUser'])->name('data-pengguna');
});

// routes dashboard admin
Route::get('/dashboard-admin', function () {
    return view('layouts.admin.dashboard-admin');
});
Route::get('/table-imunisasi2', function () {
    return view('layouts.admin.table-imunisasi2');
});
Route::get('/table-imunisasi', function () {
    return view('layouts.admin.table-imunisasi');
});
Route::get('/detail-table', function () {
    return view('layouts.admin.detail-table-imunisasi');
});
Route::get('/test', function () {
    return view('layouts.admin.test-modal');
});
Route::get('/test', function () {
    return view('layouts.admin.test-modal');
});
Route::get('/input-bumil', function () {
    return view('layouts.admin.bumil-input-data');
});


// routes/web.php

Route::get('/seats', [SeatController::class, 'index']);
Route::post('/submit-seats', [SeatController::class, 'submitSeats'])->name('submitSeats');

Route::post('/search-pasien',[PasienController::class,'findBynik'])->name('findBynik');
Route::get('/tesw',[imunisasiFilter::class])->name('tes');
Route::get('/teskb',KBFilter::class)->name('teskb');
Route::get('/tesanc',AncFilter::class)->name('tesanc');
Route::get('/tespasien',PasienFilter::class)->name('pasien');

//routes reservasi 2
// Route::get('/reservasi2', function () {
//     return view('layouts.users.user-reservasi2');
// });
// Route::get('/daftar-reservasi', function () {
//     return view('layouts.admin.lihat-reservasi');
// });

// Route::get('/reservasi-admin', function () {
//     return view('layouts.admin.admin-reservasi2');
// });
// Route::get('/lihat-reservasi-user', function () {
//     return view('layouts.users.lihat-reservasi-user');
// });
// Route::get('/tambah-pasien', function () {
//     return view('layouts.admin.tambah-pasien');
// });
// Route::get('/input-kb', function () {
//     return view('layouts.admin.kb');
// });
// Route::get('/ceknik', function () {
//     return view('layouts.admin.testajax');
// });
// Route::get('/detail-kb', function () {
//     return view('layouts.admin.detail-kb');
// });
Route::get('/daftar-pasien', function () {
    return view('layouts.admin.daftar-pasien');
});
// Route::get('/testing', function () {
//     return view('layouts.testing');
// });



// Route::get('/dashboard', function () {
//     return view('layouts.admin.admin-dashboard');
// });
// Route::get('/dashboard', function () {
//     return view('layouts.admin.admin-dashboard');
// });
// Route::get('/cetak-imunisasi', function () {
//     return view('layouts.admin.cetak-imunisasi');
// });
// Route::get('/cetak-kb', function () {
//     return view('layouts.admin.cetak-kb');
// });
// Route::get('/cetak-bumil', function () {
//     return view('layouts.admin.cetak-bumil');
// });
// Route::get('/data-pasien', function () {
//     return view('layouts.admin.data-pasien');
// });
// Route::get('/kb', function () {
//     return view('layouts.admin.kb');
// });
// Route::get('/riwayat-pasien', function () {
//     return view('layouts.admin.riwayat-pasien');
// });
// Route::get('/dashboard-user', function () {
//     return view('layouts.users.dashboard-user');
// });
// Route::get('/data-kb', function () {
//     return view('layouts.admin.data-kb');
// });
// Route::get('/dashboard-user', function () {
//     return view('layouts.users.dashboard-user');
// });

// Route::get('/data-pengguna', function () {
//     return view('layouts.admin.data-pengguna');
// });

Route::get('/riwayat', function () {
    return view('layouts.users.riwayat-periksa');
});
// Route::get('/riwayat-imunisasi', function () {
//     return view('layouts.users.riwayat-imunisasi');
// });
// Route::get('/riwayat-kb', function () {
//     return view('layouts.users.riwayat-kb');
// });
// Route::get('/riwayat-ibu-hamil', function () {
//     return view('layouts.users.riwayat-bumil');
// });
// Route::get('/riwayat-pasien', function () {
//     return view('layouts.admin.riwayat-pasien');
// });
// Route::get('/riwayat-imunisasi-admin', function () {
//     return view('layouts.admin.riwayat-imunisasi-admin');
// });
// Route::get('/riwayat-bumil-admin', function () {
//     return view('layouts.admin.riwayat-bumil-admin');
// });
// Route::get('/tes2', function () {
//     return view('layouts.login-lagi');
// });