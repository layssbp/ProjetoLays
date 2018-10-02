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
    return "<h1> Lays</h1>";
});

Route::get('/cliente', 'ClienteController@especifico')->name('cliente');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::redirect('/redirecionar', "/oi");

Route::view ('/welcome', 'welcome');

Route::get('/oi', 'AnimaisController@imprimeOi');

Route::get('oi/{id}', 'AnimaisController@retornaAnimal');

Route::resource('/bicho', 'BichoController');

Route::view('/inicio', 'telaInicial');

Route::get('hi/{nome}/{sobrenome?}', function($nome,$sobrenome=null){
	return view('telaInicial', compact('nome','sobrenome'));
});

Route::view('/heranca', 'layout-base');
Route::view('/filha', 'layout-filha');
Route::view('/filha2', 'layout-filha2');

Route::get('/nav', 'Produtos@preencheNavbar');