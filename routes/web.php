<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ArtikelController;
use App\Models\Company as CO;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CompanyController;

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
    return redirect()->route('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('dashboard')->name('dashboard');
    });

    // Route home.
    Route::get('/home', [CompanyProfileController::class, 'home'])->name('home');

    // Route company profile.
    Route::get('/about', [CompanyProfileController::class, 'about'])->name('about');

    // Route visi misi.
    Route::get('/visi', [CompanyProfileController::class, 'visi'])->name('visi');

    // Route articles.
    Route::get('/profile', [CompanyController::class, 'index'])->name('company-route');
    Route::post('/profile/create', [CompanyController::class, 'store'])->name('company.store');
    Route::post('/profile/update/{id}', [CompanyController::class, 'update'])->name('company.update');

    // Route Profile

    Route::get('/artikel', [ArtikelController::class, 'artikel'])->name('artikel');
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
    Route::post('/artikel/create', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::post('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::get('/artikel/delete/{id}', [ArtikelController::class, 'delete'])->name('artikel.delete');
    
    // Route clients.
    Route::get('/clients', [ClientController::class, 'clients'])->name('clients');
    
    // Route events.
    Route::get('/events', [EventController::class, 'events'])->name('events');
    
    // Route gallery.
    Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
    
    // Route products.
    Route::get('/products', [ProdukController::class, 'products'])->name('products');
    Route::post('/products', [ProdukController::class, 'create'])->name('products.store');
    Route::post('/products/update/{id}', [ProdukController::class, 'update'])->name('products.update');
    Route::get('/products/delete/{id}', [ProdukController::class, 'delete']);
    
    // Route kontak.
    Route::get('/kontak', function () {
        $company = CO::first()->get();
        return view('pages/kontak')->with('company', $company);
    })->name('contacts');
    
    // Route pengantar.
    Route::get('/pengantar', function () {
        $company = CO::first()->get();
        return view('pages/pengantar')->with('company', $company);
    })->name('pengantar');
   
});



require __DIR__.'/auth.php';
