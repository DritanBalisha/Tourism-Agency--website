<?php

use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MailController;







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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('faqa');
// });


Route::get('/','BookingController@index');

Route::post('insert-data', 'BookingController@insert');

//Route for mailing

// Route::get('/home','MailController@sendMail');

// Route::post('/home', 'MailController@sendMail');
