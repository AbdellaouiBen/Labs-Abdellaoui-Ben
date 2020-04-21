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
    return view('pages.indexpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('index','IndexpageController');
Route::resource('servicepage','ServicepageController');
Route::resource('blog','BlogpageController');
Route::resource('contactpage','ContactpageController');


Route::resource('user','UserController');
Route::resource('myprofil','MyprofilController');
Route::resource('role','RoleController');

Route::resource('service','ServiceController');
Route::resource('logo','LogoController');
Route::resource('banniere','BanniereController');
Route::resource('independant','IndependantController');
Route::resource('testimonial','TestimonialController');
Route::resource('contact','ContactController');
Route::resource('form','FormController');
Route::resource('footer','FooterController');
