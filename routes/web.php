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
    return view('welcome');
});

Route::resource('products', 'ProductController');
/*　↑resouceとかくと、index,edit,creare,show,update,store,delete7個(restFull)のルールを勝手に作ってくれる　*/
/*　デメリット⇒URLが勝手に決まってします。blade　の名前もルールに従う必要あり*/

/*
Route::get('/analize', 'ProductsController@analize')->name('analize');
            URL                         function            htmlのname
*/
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
