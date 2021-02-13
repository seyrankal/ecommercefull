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


Route::get('/', 'AnasayfaController@index')->name('anasayfa');

//Route::view('/kategori','kategori');

Route::post('/ara', 'UrunController@ara')->name('urun_ara'); //58. videoda eklendi
Route::get('/ara', 'UrunController@ara')->name('urun_ara');

Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');

Route::get('/sepet', 'SepetController@index')->name('sepet');

Route::get('/odeme', 'OdemeController@index')->name('odeme');

Route::get('/siparisler', 'SiparisController@index')->name('siparisler');

Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');

Route::group(['prefix' => 'kullanici'], function () {
    Route::get('/oturumac', 'KullaniciController@giris_form')->name('kullanici.oturumac'); // kullanici.oturum daki nokta alt isimlendirme icin var
    Route::get('/kaydol', 'KullaniciController@kaydol_form')->name('kullanici.kaydol');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
