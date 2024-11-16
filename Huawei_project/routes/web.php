<?php


use App\Livewire\Dashboard;
use App\Livewire\ImportFile;
use App\Livewire\Inventory;
use App\Livewire\MA;
use App\Livewire\MADetail;
use App\Livewire\Program;
use App\Livewire\Project;
use App\Livewire\ProjectDetail;
use App\Livewire\SMR;
use App\Livewire\SMRDetail;
use App\Livewire\Voucher;
use App\Livewire\VoucherDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/import-file', ImportFile::class)->name('import-file');

Route::get('/program-list', Program::class)->name('program');
Route::get('/program-list/{program_id}/project-list', Project::class)->name('project-list');
Route::get('/project/{po}', ProjectDetail::class)->name('project-detail');
Route::get('/ma-list', MA::class)->name('ma-list');
Route::get('/smr-list', SMR::class)->name('smr-list');
Route::get('/voucher-list', Voucher::class)->name('voucher-list');
Route::get('/ma-list/{ma_id}', MADetail::class)->name('ma-detail');
Route::get('/smr-list/{smr_id}', SMRDetail::class)->name('smr-detail');
Route::get('/voucher-list/{voucher_id}', VoucherDetail::class)->name('voucher-detail');

Route::get('/inventory-view', Inventory::class)->name('inventory-view');
// php artisan make:livewire Program
// php artisan make:livewire Project
// php artisan make:livewire ProjectDetail
// php artisan make:livewire MA
// php artisan make:livewire MADetail
// php artisan make:livewire SMR
// php artisan make:livewire SMRDetail
// php artisan make:livewire Voucher
// php artisan make:livewire VoucherDetail
// php artisan make:livewire Inventory

