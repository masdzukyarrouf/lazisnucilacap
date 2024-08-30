<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdmin;
use App\Livewire\KebijakanMutu;
use App\Models\visi;

Route::get('/welcome', function () {
    return view('welcome');
});


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
    Route::get('/visi', App\Livewire\Visi\Index::class)->name('visi');
    Route::get('/misi', App\Livewire\Misi\Index::class)->name('misi');
    Route::get('/admin-kebijakan', App\Livewire\KebijakanAdmin\Index::class)->name('admin-kebijakan');

});

Route::get('/', App\Livewire\Landing::class)->name('landing');

Route::get('/daftar', App\Livewire\Daftar::class);

Route::get('/login', App\Livewire\Login::class)->name('login')->middleware('guest');

Route::get('/detail-berita/{id_berita}', App\Livewire\UserBerita\Show::class)->name('detail-berita');
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

Route::get('/profil&jajaran', App\Livewire\ProfilJajaran::class)->name('profil&jajaran');

Route::get('/penghargaan', App\Livewire\Penghargaan::class)->name('penghargaan');

Route::get('/kebijakan', App\Livewire\KebijakanMutu::class)->name('kebijakan');

Route::get('/berdaya', App\Livewire\Berdaya::class)->name('berdaya');

Route::get('/cerdas', App\Livewire\Cerdas::class)->name('cerdas');

Route::get('/sehat', App\Livewire\Sehat::class)->name('sehat');

Route::get('/damai', App\Livewire\Damai::class)->name('damai');

Route::get('/hijau', App\Livewire\Hijau::class)->name('hijau');

Route::get('/profil&jajaran', App\Livewire\ProfilJajaran::class)->name('profil&jajaran');

Route::get('/penghargaan', App\Livewire\Penghargaan::class)->name('penghargaan');

Route::get('/kebijakan', App\Livewire\KebijakanMutu::class)->name('kebijakan');

Route::get('/berdaya', App\Livewire\Berdaya::class)->name('berdaya');

Route::get('/cerdas', App\Livewire\Cerdas::class)->name('cerdas');

Route::get('/sehat', App\Livewire\Sehat::class)->name('sehat');

Route::get('/damai', App\Livewire\Damai::class)->name('damai');

Route::get('/hijau', App\Livewire\Hijau::class)->name('hijau');

Route::get('/donasi/{campaign}', App\Livewire\Donasi\Donatur::class)->name('donasi.donatur');
Route::get('/pembayaran/success', App\Livewire\Donasi\Success::class)->name('donasi.success');
Route::get('/pembayaran/{campaign}/{token}', App\Livewire\Donasi\Pembayaran::class)->name('donasi.pembayaran');

Route::middleware('auth')->group(function () {
    Route::get('/profil', App\Livewire\Profil::class)->name('profil');
    Route::get('/akun', App\Livewire\Akun::class)->name('akun');
    Route::get('/riwayat', App\Livewire\Riwayat::class)->name('riwayat');
});

Route::get('/donasi/{campaign}', App\Livewire\Donasi\Donatur::class)->name('donasi.donatur');
Route::get('/pembayaran/success', App\Livewire\Donasi\Success::class)->name('donasi.success');
Route::get('/pembayaran/{campaign}/{token}', App\Livewire\Donasi\Pembayaran::class)->name('donasi.pembayaran');
Route::post('/midtrans/notification', [App\Http\Controllers\TransactionListener::class, 'handleNotification']);

Route::get('/list_donasi/{campaign}', App\Livewire\Campaigns\DonasiList::class)->name('campaigns.donasiList');
Route::get('/campaigns', App\Livewire\Campaigns\Index::class)->name('campaign');
Route::get('/campaigns/{campaign}', App\Livewire\Campaigns\Show::class)->name('campaigns.show');
Route::get('/doa/{campaign}', App\Livewire\Campaigns\DoaList::class)->name('campaigns.doaList');
Route::get('/{campaign}', App\Livewire\Donasi\Index::class)->name('donasi.index');