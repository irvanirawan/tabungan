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
// Route::get('/datapetugas', 'HomeController@datapetugas')->name('datapetugas');
// Route::get('/datakelas', 'HomeController@datakelas')->name('datakelas');
// Route::get('/datanasabah', 'HomeController@datanasabah')->name('datanasabah');
Route::get('/transaksi', 'HomeController@transaksi')->name('transaksi');
Route::get('/laporanpernasabah', 'HomeController@laporannasabah')->name('laporannasabah');
Route::get('/laporanperperiode', 'HomeController@laporanperiode')->name('laporanperiode');


Route::group(['prefix' => 'datapetugas', 'middleware' => ['role:kepala|petugas|nasabah']], function() {
    Route::get('/',['as'=>'datapetugas','uses'=>'HomeController@datapetugas']);
    Route::post('/tambahdatapetugas',['as'=>'tambahdatapetugas','uses'=>'HomeController@tambahdatapetugas']);
    Route::get('/delete/{id}',['as'=>'deletedatapetugas','uses'=>'HomeController@deletedatapetugas']);
    Route::get('/edit/{id}',['as'=>'editdatapetugas','uses'=>'HomeController@editdatapetugas']);
    Route::post('/simpan',['as'=>'simpandatapetugas','uses'=>'HomeController@simpandatapetugas']);
    // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'kelas', 'middleware' => ['role:kepala|petugas|nasabah']], function() {
    Route::get('/',['as'=>'kelas','uses'=>'HomeController@datakelas']);
    Route::post('/tambahkelas',['as'=>'tambahkelas','uses'=>'HomeController@tambahkelas']);
    Route::get('/delete/{id}',['as'=>'deletekelas','uses'=>'HomeController@deletekelas']);
    Route::get('/edit/{id}',['as'=>'editkelas','uses'=>'HomeController@editkelas']);
    Route::post('/simpan',['as'=>'simpankelas','uses'=>'HomeController@simpankelas']);
    // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'nasabah', 'middleware' => ['role:kepala|petugas|nasabah']], function() {
    Route::get('/',['as'=>'nasabah','uses'=>'HomeController@nasabah']);
    Route::post('/tambahnasabah',['as'=>'tambahnasabah','uses'=>'HomeController@tambahnasabah']);
    Route::get('/delete/{id}',['as'=>'deletenasabah','uses'=>'HomeController@deletenasabah']);
    Route::get('/edit/{id}',['as'=>'editnasabah','uses'=>'HomeController@editnasabah']);
    Route::post('/simpan',['as'=>'simpannasabah','uses'=>'HomeController@simpannasabah']);
    // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});