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

Route::get('/', function () {
    return view('produto.index');
    // echo "ola";
});
Route::resource('produto', 'Produto');
Route::get('/pedido', function () {
    return view('pedido');
    // echo "ola";
});
Route::get('/pedido/resumo', function () {
    return view('resumo');
    // echo "ola";
});
Route::get('/pedido/pagamento', function () {
    return view('pagamento');
    // echo "ola";
});

Route::get('/admin/home','AdminController@index')->name('home-admin');

Route::get('/login/admin', 'Auth\AdminLoginController@index')->name('login-admin');
Route::post('/admin/submit', 'Auth\AdminLoginController@login')->name('login-admin-submit');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('logout-admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
