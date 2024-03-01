<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BuktiBookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// home
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index']);


Route::get('/', [HomeController::class, 'index'])->name('home');



// login
Route::get('/login', [authController::class, 'showLoginForm'])->name('login');
Route::post('/login', [authController::class, 'authenticate'])->name('send.login');

// register
Route::get('/register', [authController::class, 'showRegisterform'])->name('register');
Route::post('/register', [authController::class, 'register'])->name('send.register');
// logout
Route::post('/logout', [authController::class, 'logout'])->name('logout');



// prefix dashboard
Route::middleware('auth', 'verified')->group(function () {
    Route::prefix('dashboard')
        ->name('dashboard.')->group(function () {
            // Route::get('/', [BerandaController::class, 'index'])->name('index');
            // Route::get('/edit/{id}', [BerandaController::class, 'edit'])->name('edit');
            // Route::post('/delete/{id}', [BerandaController::class, 'delete'])->name('delete');
            // Route::put('/update/{id}', [BerandaController::class, 'update'])->name('update');

            Route::get('/', [HomeController::class, 'dashboard'])->name('index');;

            Route::resource('products', DashboardController::class);


            Route::get('/booking', [BuktiBookingController::class, 'index'])->name('booking');
        });
});
Route::resource('form', UserController::class);

/*Route::get('/readmore', function () {
    return view('readmore');
});*/
