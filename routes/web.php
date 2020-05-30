<?php

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

Route::get('/', function () {
	
/*	if (Auth::check()){*/
		$user=Auth::user();
		//echo $user;
		if ($user->rol_id==2){
			return view ('/home');
		} else return view ('/admin/productos/index2'); //esta rutaa esta fallandoooooo
	/*}*/
	/*if (Auth::check()){
        if ($user->esAdmin()){
            echo "Eres usuario administrador.";
		} else
            echo "Eres estudiante.";
		
	}*/
	return view('welcome');
});


 
Route::resource('admin/productos', 'AdminProductosController');

Route::get('/admin/productos/destroy/{id}/{nombre}', 'AdminProductosController@confirmDestroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/passwords/mail', 'ForgotPasswordController@sendResetLinkEmail');*/

Route::get('/passwords/email', function () {
    return view('email');
});
