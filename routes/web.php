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
    Route::get('/admin-konfirmasi', App\Livewire\AdminKonfirmasi::class)->name('admin-konfirmasi');
    Route::get('/petugas', App\Livewire\Petugas\Index::class)->name('petugas');

});

Route::get('/', App\Livewire\Landing::class)->name('landing');

Route::get('/daftar', App\Livewire\Daftar::class);

Route::get('/login', App\Livewire\Login::class)->name('login')->middleware('guest');
Route::get('/Login', App\Livewire\Ziwaf\Login::class)->name('Login-ziwaf')->middleware('guest');

Route::get('/detail-berita/{title_berita}', App\Livewire\UserBerita\Show::class)->name('user-berita.show');
Route::get('/landing-mobile', App\Livewire\LandingMobile::class);

Route::get('/detail-campaign', App\Livewire\DetailCampaign::class);

Route::post('logout', App\Http\Controllers\logout::class)->name('logout');

Route::get('/berita', App\Livewire\UserBerita\Index::class)->name('berita');

Route::get('/zakat', App\Livewire\ziwaf\Ziwaf::class)->name('zakat');
Route::get('/infak', App\Livewire\ziwaf\Infak::class)->name('infak');
Route::get('/wakaf', App\Livewire\ziwaf\Wakaf::class)->name('wakaf');
Route::get('/fidyah', App\Livewire\ziwaf\Fidyah::class)->name('fidyah');
Route::get('/qurban', App\Livewire\ziwaf\Qurban::class)->name('qurban');
Route::get('/pembayaran_zakat', App\Livewire\ziwaf\ZakatBayar::class)->name('pembayaran_zakat');
Route::get('/pembayaran_infaq&wakaf', App\Livewire\ziwaf\InfaqwakafBayar::class)->name('pembayaran-infaq&wakaf');
Route::get('/checkout', App\Livewire\ziwaf\Checkout::class)->name('checkout');


Route::get('/mitra', App\Livewire\UserMitra::class)->name('mitra');



Route::get('/profil&jajaran', App\Livewire\ProfilJajaran::class)->name('profil&jajaran');

Route::get('/penghargaan', App\Livewire\Penghargaan::class)->name('penghargaan');

Route::get('/kebijakan', App\Livewire\KebijakanMutu::class)->name('kebijakan');

Route::get('/berdaya', App\Livewire\Berdaya::class)->name('berdaya');

Route::get('/cerdas', App\Livewire\Cerdas::class)->name('cerdas');

Route::get('/sehat', App\Livewire\Sehat::class)->name('sehat');

Route::get('/damai', App\Livewire\Damai::class)->name('damai');

Route::get('/hijau', App\Livewire\Hijau::class)->name('hijau');

Route::get('/laporan', App\Livewire\Laporan::class)->name('laporan');

Route::get('/konfirmasi', App\Livewire\UserKonfirmasi::class)->name('user-konfirmasi');

Route::get('/pengajuan-mobiznu', App\Livewire\PengajuanMobiznu::class)->name('pengajuan-mobiznu');

Route::get('/pengajuan-gocap', App\Livewire\PengaduanGocap\Index::class)->name('pengajuan-gocap.index');
Route::get('/pengajuan-gocap/success', App\Livewire\PengaduanGocap\Success::class)->name('pengajuan-gocap.success');


Route::get('/wa_splash', App\Livewire\WaSplash::class)->name('wa_splash');

Route::get('/sejarah', App\Livewire\Sejarah::class)->name('sejarah');

Route::get('/legalitas', App\Livewire\Legalitas::class)->name('legalitas');


Route::get('/donasi/{title}', App\Livewire\Donasi\Donatur::class)->name('donasi.donatur');
Route::get('/pembayaran/success', App\Livewire\Donasi\Success::class)->name('donasi.success');
Route::get('/pembayaran/{title}/{token}', App\Livewire\Donasi\Pembayaran::class)->name('donasi.pembayaran');

Route::get('/pengajuan', App\Livewire\Pengajuan\Index::class)->name('pengajuan.index');
Route::get('/pengajuan/success', App\Livewire\Pengajuan\Success::class)->name('pengajuan.success');

Route::middleware('auth')->group(function () {
    // Route::get('/profil', App\Livewire\Profil::class)->name('profil');
    // Route::get('/akun', App\Livewire\Akun::class)->name('akun');
    // Route::get('/riwayat', App\Livewire\Riwayat::class)->name('riwayat');
    Route::get('/profile', App\Livewire\Profile\Index::class)->name('profile.index');
    Route::get('/account', App\Livewire\Profile\Account::class)->name('profile.account');
    Route::get('/history', App\Livewire\Profile\History::class)->name('profile.history');
    Route::get('/transaction', App\Livewire\Profile\Transaction::class)->name('profile.transaction');
});

// Route::post('/transaction/notification', [TransactionListener::class, 'handleNotification']);

Route::get('/donasi/{title}', App\Livewire\Donasi\Index::class)->name('donasi.index');
Route::get('/donasi/data/{title}', App\Livewire\Donasi\Donatur::class)->name('donasi.donatur');
Route::get('/pembayaran/success', App\Livewire\Donasi\Success::class)->name('donasi.success');
Route::get('/pembayaran/{title}/{token}', App\Livewire\Donasi\Pembayaran::class)->name('donasi.pembayaran');

Route::get('/list_donasi/{title}', App\Livewire\Campaigns\DonasiList::class)->name('campaigns.donasiList');
Route::get('/campaigns', App\Livewire\Campaigns\Index::class)->name('campaign');
Route::get('/campaigns/{title}', App\Livewire\Campaigns\Show::class)->name('campaigns.show');
Route::get('/doa/{title}', App\Livewire\Campaigns\DoaList::class)->name('campaigns.doaList');