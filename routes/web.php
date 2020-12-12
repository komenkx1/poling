<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SuaraController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;


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
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('auth', [RegisterController::class, 'index'])->name('auth');
Route::view('visi-misi', 'visi-misi');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('register/fetch', [RegisterController::class, 'fetch'])->name('autocomplete.fetch');
Route::post('register', [RegisterController::class, 'create'])->name('register.create');
Route::post('calon/fetch', [CalonController::class, 'fetch'])->name('calon.fetch');


Route::get('/', [MainController::class, 'index'])->name('home');
// Route::get('/role', [MainController::class, 'role'])->name('role');

Route::get('/rekapitulasi', [MainController::class, 'rekap'])->name('rekap');
Route::post('/visi-misi', [MainController::class, 'misi'])->name('visimisi');

Route::middleware(['auth'])->group(function () {
    Route::get('/chart', [MainController::class, 'chart'])->name('chart');
    Route::post('/vote', [MainController::class, 'vote'])->name('vote');

    Route::get('/logout', [MainController::class, 'logout']);
});

Route::middleware(['role:admin'])->group(function () {

    // Route::resource('calons', CalonController::class);
    Route::resource('mahasiswas', MahasiswaController::class)->except([
        'create', 'store', 'destroy'
    ]);;
    Route::resource('prodis', ProdiController::class);
    Route::resource('suaras', SuaraController::class)->except([
        'create', 'edit', 'update'
    ]);

    Route::get("admin", 'DashboardController@index');
    Route::get("admin/role/", 'RoleController@index');
    Route::put("admin/role/update/{role_model:model_id}", 'RoleController@update');
    Route::get("admin/calon", 'CalonController@index');
    Route::get("admin/calon/create", 'CalonController@create');
    Route::post("admin/calon/store", 'CalonController@store');
    Route::get("admin/calon/edit/{calon:id}", 'CalonController@edit');
    Route::put("admin/calon/update/{calon:id}", 'CalonController@update');
    Route::delete("admin/calon/delete/{calon:id}", 'CalonController@destroy');
    Route::get("admin/mahasiswa", 'MahasiswaController@index');
    Route::get("admin/mahasiswa/data", 'MahasiswaController@data');
    Route::put("admin/mahasiswa/verif/{mahasiswa:id}", 'MahasiswaController@verif');
    Route::delete("admin/mahasiswa/delete/{mahasiswa:id}", 'MahasiswaController@destroy');

    Route::get("admin/absen", [AbsenController::class, 'index']);
    Route::get("admin/absen/edit/{absen:id}", [AbsenController::class, 'edit']);
    Route::put("admin/absen/update/{absen:id}", [AbsenController::class, 'update']);
    Route::delete("admin/absen/delete/{absen:id}", [AbsenController::class, 'destroy']);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
