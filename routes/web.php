<?php
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\HomeController;
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
//HOME
Route:: get('/home','App\\Http\\Controllers\\HomeController@index')->name('home');
Route:: get('/home/load','App\\Http\\Controllers\\HomeController@load');

//LOGIN
Route::get('/login','App\\Http\\Controllers\\loginController@index')->name('log');
Route::post('/login','App\\Http\\Controllers\\loginController@checkLogin')->name('loginUser');

//LOGOUT
Route::get('/login/logout','App\\Http\\Controllers\\loginController@logout')->name('logout');

//SIGNUP
Route::get('/signup','App\\Http\\Controllers\\signupController@index');
Route::post('/signup','App\\Http\\Controllers\\signupController@createUser')->name('createUser');
Route::get('/signup/email/{email}', "App\\Http\\Controllers\\signupController@checkEmail");

//API
Route::get('/create','App\\Http\\Controllers\\CreateController@fetch_cane');

//CUSTOMER
Route::get('/customer','App\\Http\\Controllers\\CustomerController@index')->name('customer');
Route::get('/customer/post/{descrizione}/{link}','App\\Http\\Controllers\\CustomerController@caricamento');

//LIKE
Route::get('/home/like/add/{id_post}','App\\Http\\Controllers\\LikeController@add');
Route::get('/home/like/remove/{id_post}','App\\Http\\Controllers\\LikeController@remove');

//COMMUNITY
Route::get('/community','App\\Http\\Controllers\\CommunityController@index')->name('community');
Route::get('/community/cerca/{nome?}/{cognome?}','App\\Http\\Controllers\\CommunityController@getCommunity');
