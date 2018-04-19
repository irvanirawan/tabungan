<?php

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

Route::get('/admin', function () {
    return view('admin.home');
});
Route::get('/admin/table', function () {
    return view('admin.table');
});
Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datapetugas', 'HomeController@datapetugas')->name('datapetugas');
Route::get('/datakelas', 'HomeController@datakelas')->name('datakelas');
Route::get('/datanasabah', 'HomeController@datanasabah')->name('datanasabah');
Route::get('/transaksi', 'HomeController@transaksi')->name('transaksi');
Route::get('/laporanpernasabah', 'HomeController@laporannasabah')->name('laporannasabah');
Route::get('/laporanperperiode', 'HomeController@laporanperiode')->name('laporanperiode');

// Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
//     Route::get('/', 'AdminController@welcome');
//     Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
// });