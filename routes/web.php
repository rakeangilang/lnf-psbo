<?php
use App\Notifications\UserNotif;
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
//     #$user = App\User::first();
//     #$user->notify(new UserNotif("A new user has visited on your application."));
//     return view('lnf.baranghilang');
// });

Route::get('/', 'BarangController@kehilangan');

// form laporan
Route::get('/lapor_kehilangan', 'BarangController@formHilang');
Route::post('/lapor_kehilangan', 'BarangController@storekehilangan');
Route::post('/lapor_temuan', 'BarangController@storetemuan');
Route::get('/lapor_temuan', 'BarangController@formTemuan');

// cari tempat
Route::get('/pomi', 'BarangController@pomiPage');
Route::get('/gww', 'BarangController@gwwPage');
Route::get('/alhur', 'BarangController@alhurPage');
Route::get('/lsi', 'BarangController@lsiPage');

// cari kategori
Route::get('/gadget', 'BarangController@gadgetPage');
Route::get('/dompet', 'BarangController@dompetPage');
Route::get('/tas', 'BarangController@tasPage');
Route::get('/jamtangan', 'BarangController@jamtanganPage');
Route::get('/sepatu', 'BarangController@sepatuPage');
Route::get('/lain', 'BarangController@lainPage');

Route::Auth();
Route::get('/hilang', 'BarangController@kehilangan');
Route::get('/temuan', 'BarangController@penemuan');
Route::get('/klaim/create/{id}', 'KlaimController@create');
Route::resource('barang', 'BarangController');
Route::resource('klaim', 'KlaimController');

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware(['role','auth']);
