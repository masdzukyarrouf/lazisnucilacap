<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdmin;
use App\Models\visi;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('landing');
// });


Route::middleware([CheckAdmin::class])->group(function () {

    Route::get('/admin', App\Livewire\Admin\Index::class)->name('admin');
    Route::get('/user', App\Livewire\User\Index::class)->name('user');
    Route::get('/admin-campaign', App\Livewire\AdminCampaign\Index::class)->name('admin-campaign');
    Route::get('/update-campaign', App\Livewire\AdminUpdate\Index::class)->name('update-campaign');
    Route::get('/user/create', App\Livewire\User\Create::class)->name('user');
    Route::get('/admin-berita', App\Livewire\Berita\Index::class)->name('admin-berita');
    Route::get('/gambar_landing', App\Livewire\GambarLanding\Index::class)->name('gambar_landing');
    Route::get('/admin-mitra', App\Livewire\Mitra\Index::class)->name('admin-mitra');
    Route::get('/admin-donasi', App\Livewire\AdminDonasi\Index::class)->name('admin-donasi');
    // Route::get('/user/create', App\Livewire\User\Create::class)->name('user');
    Route::get('/visi', App\Livewire\Visi\Index::class)->name('visi');
    Route::get('/misi', App\Livewire\Misi\Index::class)->name('misi');

});

Route::get('/', App\Livewire\Landing::class)->name('landing');

Route::get('/campaigns', App\Livewire\Campaigns\Index::class)->name('campaign');
// Route::get('/kategori', App\Livewire\Campaigns\Kategori::class)->name('kategori');
Route::get('/campaigns/{campaign}', App\Livewire\Campaigns\Show::class)->name('campaigns.show');

Route::get('/daftar', App\Livewire\Daftar::class);

Route::get('/login', App\Livewire\Login::class)->name('login')->middleware('guest');

Route::get('/detail-berita/{id_berita}', App\Livewire\DetailBerita::class)->name('detail-berita');
Route::get('/landing-mobile', App\Livewire\LandingMobile::class);

Route::get('/detail-campaign', App\Livewire\DetailCampaign::class);

Route::post('logout', App\Http\Controllers\logout::class)->name('logout');

Route::get('/berita', App\Livewire\UserBerita\Index::class)->name('berita');

Route::get('/zakat', App\Livewire\Ziwaf::class)->name('zakat');

Route::get('/infak', App\Livewire\Infak::class)->name('infak');

Route::get('/wakaf', App\Livewire\Wakaf::class)->name('wakaf');

Route::get('/pembayaran_zakat', App\Livewire\ZakatBayar::class)->name('pembayaran_zakat');

Route::get('/pembayaran_infaq&wakaf', App\Livewire\InfaqwakafBayar::class)->name('pembayaran-infaq&wakaf');

Route::get('/mitra', App\Livewire\UserMitra::class)->name('mitra');



Route::middleware('auth')->group(function () {
    Route::get('/profil', App\Livewire\Profil::class)->name('profil');
    Route::get('/akun', App\Livewire\Akun::class)->name('akun');
    Route::get('/riwayat', App\Livewire\Riwayat::class)->name('riwayat');
});



Route::get('/{campaign}', App\Livewire\Donasi\Index::class)->name('donasi.index');
Route::get('/donasi/{campaign}', App\Livewire\Donasi\Donatur::class)->name('donasi.donatur');
Route::get('/pembayaran/{campaign}', App\Livewire\Donasi\Pembayaran::class)->name('donasi.pembayaran');
Route::get('/list_donasi/{campaign}', App\Livewire\Campaigns\DonasiList::class)->name('campaigns.donasiList');
Route::get('/doa/{campaign}', App\Livewire\Campaigns\DoaList::class)->name('campaigns.doaList');