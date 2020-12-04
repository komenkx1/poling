<?php

use App\Http\Controllers\CalonController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MainController;
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
// Route::get("/register", 'RegisterController@index');
// Route::get('register', 'RegisterController@index')->name('search');
Route::get('auth', 'Auth\RegisterController@index')->name('auth');
Route::view('visi-misi', 'visi-misi');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('register/fetch', 'Auth\RegisterController@fetch')->name('autocomplete.fetch');
Route::post('register', 'Auth\RegisterController@create')->name('register.create');
Route::post('calon/fetch', 'CalonController@fetch')->name('calon.fetch');


Route::get('/',     [MainController::class, 'index'])->name('home');
Route::post('/visi-misi',     [MainController::class, 'misi'])->name('visimisi');
Route::get('/chart', [MainController::class, 'chart']);
Route::post('/vote', [MainController::class, 'vote'])->name('vote');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [MainController::class, 'logout']);

    // Route::resource('calons', CalonController::class);
    Route::resource('mahasiswas', MahasiswaController::class)->except([
        'create', 'store', 'destroy'
    ]);;
    Route::resource('prodis', ProdiController::class);
    Route::resource('suaras', SuaraController::class)->except([
        'create', 'edit', 'update'
    ]);

    Route::get("admin", 'DashboardController@index');
    Route::get("admin/calon", 'CalonController@index');
    Route::get("admin/calon/create", 'CalonController@create');
    Route::post("admin/calon/store", 'CalonController@store');
    Route::get("admin/calon/edit/{calon:id}", 'CalonController@edit');
    Route::put("admin/calon/update/{calon:id}", 'CalonController@update');
    Route::delete("admin/calon/delete/{calon:id}", 'CalonController@destroy');
    Route::view("admin/mahasiswa", 'admin/mahasiswa/index');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
