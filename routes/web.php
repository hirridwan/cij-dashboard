<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\App\Dashboard\P2pLending;
use App\Http\Livewire\App\Dashboard\Deposito;
use App\Http\Livewire\App\Dashboard\NominatifPembiayaan;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;

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
    // return view('welcome');
    return redirect()->route('dashboard.p2p-lending');
});
Route::group(['middleware' => 'guest'], function(){

    //login
    Route::get('/dashboard/login',Login::class)->name('dashboard.login');

});

Route::group(['middleware' => 'auth'], function(){

    //dashboard p2p-lending
    Route::get('/dashboard/p2p-lending',P2pLending::class)->name('dashboard.p2p-lending');
    Route::get('/dashboard/deposito',Deposito::class)->name('dashboard.deposito');
    Route::get('/dashboard/nominatif-pembiayaan',NominatifPembiayaan::class)->name('dashboard.nominatif-pembiayaan');
    Route::get('/logout',Logout::class)->name('dashboard.logout');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
