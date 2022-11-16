<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [Controller::class, 'home_new'])->name('index');
// Route::get('/about', [Controller::class, 'about'])->name('about');
// Route::get('/contact-us', [Controller::class, 'contact_us'])->name('contact-us');
// Route::get('/product', [Controller::class, 'product'])->name('product');
// Route::get('/product_new', [Controller::class, 'product_new'])->name('product');
// Route::get('/view-product/{id}', [Controller::class, 'view_product'])->name('view-product');
// Route::get('/test', [Controller::class, 'test'])->name('test');


Route::get('/home-new', [Controller::class, 'home_new'])->name('home-new');
Route::get('/about-us', [Controller::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [Controller::class, 'contact_us'])->name('contact-us');
Route::get('/services', [Controller::class, 'services'])->name('services');
Route::get('/products', [Controller::class, 'products'])->name('products');
Route::get('/sourcing', [Controller::class, 'sourcing'])->name('sourcing');
Route::get('/quality-control', [Controller::class, 'quality_control'])->name('quality-control');
Route::get('/distribution', [Controller::class, 'distribution'])->name('distribution');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::post('/contact-register', [Controller::class, 'contact_register'])->name('contact-register');
Route::get('/mail-test', [HomeController::class, 'mail_test']);

Route::get('/theme', [Controller::class, 'theme'])->name('theme');
