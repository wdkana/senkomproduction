<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/fitur', function () {
    return view('home_component.fitur');
});

Route::get('/privasi', function () {
    return view('home_component.privasi');
});

Route::get('/sejarah', function () {
    return view('home_component.sejarah');
});

Route::get('/struktur', function () {
    return view('home_component.struktur');
});

Route::get('/visimisi', function () {
    return view('home_component.visimisi');
});

Route::get('/kontak', function () {
    return view('home_component.kontak');
});

Route::get('/terms', function () {
    return view('home_component.terms');
});

Route::get('/faq', function () {
    return view('home_component.faq');
});


//Admin Controller
Route::get('/logout', 'AdminController@logout');
Route::post('/loginPost', 'AdminController@loginPost');
Route::get('/admin', 'AdminController@admin');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/user', 'AdminController@admin_user');
Route::get('/datauser', 'AdminController@datauser');
Route::get('/tambahuser', 'AdminController@tambahuser');
Route::post('/tambah', 'AdminController@tambah');
Route::delete('/delete', 'AdminController@delete');
Route::get('/profil', 'AdminController@profil');
Route::get('/admin/id/{id}', 'AdminController@updateuser');
Route::post('/update', 'AdminController@update');
Route::post('/admin/berita', 'AdminController@tampil');
Route::post('/admin/kirim', 'AdminController@kirim');
Route::get('/galeri', 'GaleriController@index');
Route::post('/galeri/upload', 'GaleriController@upload');
Route::post('/galeri/upload_vid', 'GaleriController@upload_vid');
Route::delete('/galeri/{image}', 'GaleriController@destroy');
Route::get('/admin/pemantauan', 'AdminController@pemantauan');
Route::get('/berita/shownhide/{id}', 'AdminController@showhide_berita');
Route::get('/telegram', 'AdminController@telegram');
Route::get('/telegramphoto', 'AdminController@telegram_poto');
Route::get('/sms', 'AdminController@sms');

//User Controller
Route::get('/user', 'UserController@user');
Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/user/profile', 'UserController@profile');
Route::get('/user/ubah/{id}', 'UserController@ubah');
Route::post('/user/update', 'UserController@update');
Route::post('/user/berita', 'UserController@tampil');
Route::post('/user/kirim', 'UserController@kirim');
Route::get('/user/pemantauan', 'UserController@pemantauan');

//gallery Controller
Route::get('/galeri/set1/{id}', 'GaleriController@slider1');
Route::get('/galeri/set2/{id}', 'GaleriController@slider2');

Route::get('/', 'BeritaController@index');
Route::post('/berita', 'BeritaController@tampil');
Route::post('/berita/kirim', 'BeritaController@kirim');

Route::get('/galeri', 'GaleriController@index');
Route::get('/data', 'PemantauanController@data');
Route::get('/databerita', 'BeritaController@loadberita');
Route::get('/databeritajam', 'BeritaController@loadberitajam');
Route::get('/pemantauan', 'PemantauanController@index');
