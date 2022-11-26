<?php

use App\Http\Controllers\Auth\LoginController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user-list', [HomeController::class, 'userList'])->name('user-list');
    Route::get('/user-list-api', [HomeController::class, 'userListApi'])->name('user-list-api');
    Route::get('/get-all-users', [HomeController::class, 'getAllUsers'])->name('get-all-users');
    
    Route::get('/add-user', [HomeController::class, 'addUser'])->name('add-user');
    Route::get('/edit-user/{id}', [HomeController::class, 'editUser'])->name('edit-user');
    Route::post('/user-register', [HomeController::class, 'userRegister'])->name('user-register');
    
    Route::get('/compose-mail', [HomeController::class, 'mailCompose'])->name('compose-mail');
    Route::post('/mail-send', [HomeController::class, 'sendMail'])->name('mail-send');
    Route::get('/mail-list', [HomeController::class, 'mailList'])->name('mail-list');
    Route::get('/mail-list-api', [HomeController::class, 'mailListApi'])->name('mail-list-api');
});

Route::post('/contact-register', [Controller::class, 'contactRegister'])->name('contact-register');
Route::post('/is_email_exists', [Controller::class, 'isEmailExists'])->name('is_email_exists');
Route::get('/get-city-state', [Controller::class, 'getCityState'])->name('get-city-state');

Route::get('/mail-test', [HomeController::class, 'mail_test']);

Route::get('/theme-view', [Controller::class, 'theme_view'])->name('theme-view');
