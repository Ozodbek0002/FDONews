<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/login',[AdminController::class, 'login']);

Route::post('/admin1',[AdminController::class, 'admin1']);
Route::get('/admin2',[AdminController::class, 'admin2']);


Route::get('/addnews',[AdminController::class, 'addnews']);

Route::post('/sendnews',[AdminController::class, 'sendnews']);

Route::post('/contact',[AdminController::class, 'contact']);

Route::get('/message',[AdminController::class, 'messages']);

Route::get('/read/{id}',[AdminController::class, 'read']);


Route::get('/update/{id}',[AdminController::class, 'update']);

Route::post('/updatenew/{id}',[AdminController::class, 'updatenew']);


Route::post('/search',[HomeController::class, 'search']);


Route::get('/deletenew/{id}',[AdminController::class, 'delete']);

Route::get('/addnews',[AdminController::class, 'addnews']);


Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/single/{id?}',[HomeController::class, 'single']);

Route::get('/uzbekiston',[HomeController::class, 'uzbekistan']);
Route::get('/sport',[HomeController::class, 'sport']);
Route::get('/jamiyat',[HomeController::class, 'jamiyat']);
Route::get('/jahon',[HomeController::class, 'jahon']);
Route::get('/biznes',[HomeController::class, 'biznes']);
Route::get('/audio',[HomeController::class, 'audio']);
Route::get('/fan',[HomeController::class, 'fan']);
Route::get('/iqtisod',[HomeController::class, 'iqtisodiyod']);

