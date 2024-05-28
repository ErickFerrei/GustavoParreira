<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropriedadeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Attributes\Group;

// Rotas de autenticação geradas pelo Auth::routes()
Auth::routes();

// Rotas de idioma
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Rotas para o controle HomeController

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
// Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
// Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


// ROTAS DO SITE PRINCIPAL
Route::get('/propriedades', function () {
    return view('property-grid');
})->name('site-properte');
// ---------------------------------------
Route::get('/sobre', function () {
    return view('sobre');
})->name('site-sobre');
// ---------------------------------------
Route::get('/contato', function () {
    return view('contato');
})->name('site-contato');



// END ROTAS DO SITE PRINCIPAL


Route::prefix('/')->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('site-index');
    Route::get('/propriedades', [SiteController::class, 'propriedades'])->name('site-properte');
    Route::get('/propriedade-detalhe/{id}', [SiteController::class, 'propriedadeDetalhe'])->name('site-propriedade-detalhe');
    // Route::get('/search', [SiteController::class, 'Search'])->name('propriedade-search');
});


Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home-index');
});

// Rotas para o controle ConfigController dentro do prefixo 'config'
Route::prefix('/admin/config')->group(function () {
    Route::get('/', [ConfigController::class, 'index'])->name('config-index');
    Route::get('/create', [ConfigController::class, 'create'])->name('config-create');
    Route::post('/', [ConfigController::class, 'store'])->name('config-store');
    Route::get('/{id}/edit', [ConfigController::class, 'edit'])->where('id', '[0-9]+')->name('config-edit');
    Route::put('/{id}', [ConfigController::class, 'update'])->where('id', '[0-9]+')->name('config-update');
    Route::delete('/{id}', [ConfigController::class, 'destroy'])->where('id', '[0-9]+')->name('config-destroy');
});

// Rotas para o controle BannerController dentro do prefixo 'banner'
Route::prefix('/admin/banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('banner-index');
    Route::get('/create', [BannerController::class, 'create'])->name('banner-create');
    Route::post('/', [BannerController::class, 'store'])->name('banner-store');
    Route::get('/{id}/edit', [BannerController::class, 'edit'])->where('id', '[0-9]+')->name('banner-edit');
    Route::put('/{id}', [BannerController::class, 'update'])->where('id', '[0-9]+')->name('banner-update');
    Route::delete('/{id}', [BannerController::class, 'destroy'])->where('id', '[0-9]+')->name('banner-destroy');
});


// Rotas para o controle PropriedadeController dentro do prefixo 'Propriedade'
Route::prefix('/admin/propriedade')->group(function () {
    Route::get('/', [PropriedadeController::class, 'index'])->name('propriedade-index');
    Route::get('/create', [PropriedadeController::class, 'create'])->name('propriedade-create');
    Route::post('/', [PropriedadeController::class, 'store'])->name('propriedade-store');
    Route::get('/{id}/edit', [PropriedadeController::class, 'edit'])->where('id', '[0-9]+')->name('propriedade-edit');
    Route::put('/{id}', [PropriedadeController::class, 'update'])->where('id', '[0-9]+')->name('propriedade-update');
    Route::delete('/{id}', [PropriedadeController::class, 'destroy'])->where('id', '[0-9]+')->name('propriedade-destroy');
});


// Rotas para o controle PropriedadeController dentro do prefixo 'Propriedade'
Route::prefix('/admin/endereco')->group(function () {
    Route::get('/', [EnderecoController::class, 'index'])->name('endereco-index');
    Route::get('/create', [EnderecoController::class, 'create'])->name('endereco-create');
    Route::post('/', [EnderecoController::class, 'store'])->name('endereco-store');
    Route::get('/{id}/edit', [EnderecoController::class, 'edit'])->where('id', '[0-9]+')->name('endereco-edit');
    Route::put('/{id}', [EnderecoController::class, 'update'])->where('id', '[0-9]+')->name('endereco-update');
    Route::delete('/{id}', [EnderecoController::class, 'destroy'])->where('id', '[0-9]+')->name('endereco-destroy');
});
