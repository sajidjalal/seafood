<?php

use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/contact-us', [Controller::class, 'contact_us'])->name('contact-us');
Route::get('/product', [Controller::class, 'product'])->name('product');
Route::get('/view-product/{id}', [Controller::class, 'view_product'])->name('view-product');
Route::get('/test', [Controller::class, 'test'])->name('test');
