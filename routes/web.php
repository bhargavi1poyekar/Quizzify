<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', 'PagesController@index');
Route::get('/questions','QuestController@index');
Route::post('/questions/check', 'QuestController@check');
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
