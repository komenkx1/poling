<?php

use App\Http\Controllers\CalonController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SuaraController;
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
// Route::get('kirimemail', function(){
//     for ($i=0; $i <100; $i++){
//         \Mail::raw('Selamat Akun Telah Di Verifikasi', function ($message) {
//             $message->to('nowytp@gmail.com');
//             $message->subject('Pemberitahuan Verifikasi Musma');

//         });
//     }

// });
Route::auth();
Route::get("admin", 'DashboardController@index');
Route::view("admin/mahasiswa", 'admin/mahasiswa/index');
// Route::get("/register", 'RegisterController@index');
// Route::get('register', 'RegisterController@index')->name('search');
Route::get('auth', 'Auth\RegisterController@index')->name('auth');
Route::view('visi-misi', 'visi-misi');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('register/fetch', 'Auth\RegisterController@fetch')->name('autocomplete.fetch');
Route::get('/', function () {
    return view('index');
});

Route::resource('calons', CalonController::class);
Route::resource('mahasiswas', MahasiswaController::class);
Route::resource('prodis', ProdiController::class);
Route::resource('suaras', SuaraController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
