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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/' , 'LoginController@Login');
Route::get('/view/Login' , 'LoginController@Login');
Route::get('/view/Register' ,'Registercontroller@Register');
?>
<!--変更したファイルです　10/24-->

