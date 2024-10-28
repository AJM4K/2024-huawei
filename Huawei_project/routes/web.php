<?php

use App\Http\Controllers\PoController;
use App\Livewire\VoucherCreate;
use App\Livewire\Dashboard;
use App\Livewire\ImportFile;
use App\Livewire\MADetail;
use App\Livewire\MAList;
use App\Livewire\PODetail;
use App\Livewire\PoList;
use App\Livewire\SMRDetail;
use App\Livewire\SMRList;
use App\Livewire\VoucherDetail;
use App\Livewire\VoucherList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/po-list', PoList::class)->name('po-list');
Route::get('/po-list/{po_id}', PODetail::class)->name('po-detail');

Route::get('/ma-list', MAList::class)->name('ma-list');
Route::get('/po-list/{po_id}/ma-list/{ma_id}', MADetail::class)->name('ma-detail');

Route::get('/smr-list', SMRList::class)->name('smr-list');
Route::get('/po-list/{po_id}/smr-list/{smr_id}', SMRDetail::class)->name('smr-detail');

Route::get('/import-file', ImportFile::class)->name('import-file');

// routes/web.php

Route::get('/po-list/{po_id}/smr-list/{smr_id}/voucher-create', VoucherCreate::class)->name('voucher-create');

Route::get('/voucher-list', VoucherList::class)->name('voucher-list');
Route::get('/voucher-list/{voucher_id}', VoucherDetail::class)->name('voucher-detail');