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
    return view('obscura.page.landing', ['title' => 'OBSCURA']);
});

Route::get('/about-us', function () {
    return view('obscura.page.about', ['title' => 'OBSCURA - ABOUT US']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/weekly-meeting', [App\Http\Controllers\WeeklyMeeting::class, 'index'])->name('weeklymeeting');

// Obscura Exibition route

Route::get('/obscura-exibition',function(){
    return view('ObscuraExibition.page.landing',['title' => 'OBSCURA EXIBITION']);
});


