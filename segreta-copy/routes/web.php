<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Segreta
Route::get('/segreta',[App\Http\Controllers\Main2021Controller::class,'segreta'])->name('segreta');
Route::get('/m/segreta',[App\Http\Controllers\Main2021Controller::class,'segreta_mob'])->name('mob-segreta');
Route::get('/segreta/rules',[App\Http\Controllers\Main2021Controller::class,'segreta_rules'])->name('segreta-rules');
Route::get('/m/segreta/rules',[App\Http\Controllers\Main2021Controller::class,'segreta_rules_mob'])->name('mob-segreta-rules');
Route::get('/segreta/prizes',[App\Http\Controllers\Main2021Controller::class,'segreta_prizes'])->name('segreta-prizes');
Route::get('/m/segreta/prizes',[App\Http\Controllers\Main2021Controller::class,'segreta_prizes_mob'])->name('mob-segreta-prizes');
Route::get('/segreta/faqs',[App\Http\Controllers\Main2021Controller::class,'segreta_faqs'])->name('segreta-faqs');
Route::get('/m/segreta/faqs',[App\Http\Controllers\Main2021Controller::class,'segreta_faqs_mob'])->name('mob-segreta-faqs');
Route::get('/segreta/contacts',[App\Http\Controllers\Main2021Controller::class,'segreta_contacts'])->name('segreta-contacts');
Route::get('/m/segreta/contacts',[App\Http\Controllers\Main2021Controller::class,'segreta_contacts_mob'])->name('mob-segreta-contacts');
Route::get('/segreta/leaderboard',[App\Http\Controllers\Main2021Controller::class,'segreta_leaderboard'])->name('segreta-leaderboard');
Route::get('/m/segreta/leaderboard',[App\Http\Controllers\Main2021Controller::class,'segreta_leaderboard_mob'])->name('mob-segreta-leaderboard');
Route::get('/segreta/dashboard',[App\Http\Controllers\Main2021Controller::class,'segreta_dashboard'])->name('segreta-dashboard');
Route::get('/m/segreta/dashboard',[App\Http\Controllers\Main2021Controller::class,'segreta_dashboard_mob'])->name('mob-segreta-dashboard');
Route::get('/segreta/hunt',[App\Http\Controllers\Main2021Controller::class,'segreta_hunt'])->name('segreta-hunt');
Route::get('/m/segreta/hunt',[App\Http\Controllers\Main2021Controller::class,'segreta_hunt_mob'])->name('mob-segreta-hunt');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google/', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle')->name('google-login');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');
Route::redirect('/login', '/auth/google');
