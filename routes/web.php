<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', [CompanyProfileController::class, 'home']);


// about company profile db
Route::get('/about', [CompanyProfileController::class, 'about']);
// visi company profile db
Route::get('/visi', [CompanyProfileController::class, 'visi']);
// artikel artikel db
Route::get('/artikel', [ArtikelController::class, 'artikel']);
// clients clients db
Route::get('/clients', [ClientController::class, 'clients']);
// events events db
Route::get('/events', [EventController::class, 'events']);
// gallery gallery db
Route::get('/gallery', [GalleryController::class, 'gallery']);
// products product db
Route::get('/products', [ProdukController::class, 'products']);
Route::post('/products', [ProdukController::class, 'create']);
Route::get('/products/{id}', [ProdukController::class, 'edit']);
Route::patch('/products/{id}/update', [ProdukController::class, 'update']);
Route::delete('/products/{id}', [ProdukController::class, 'delete']);
// kontak non db
Route::get('/kontak', function () {
    return view('pages/kontak');
});
// pengantar non db
Route::get('/pengantar', function () {
    return view('pages/pengantar');
});
// profile non db
Route::get('/profile', function () {
    return view('pages/profile');
});
