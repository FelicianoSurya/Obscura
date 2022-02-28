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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/weekly-meeting', [App\Http\Controllers\WeeklyMeeting::class, 'index'])->name('weeklymeeting');

// Obscura Exibition route



Route::group(['prefix' => 'obscura-exhibition'], function () {
	Route::get('/',function(){
        return view('ObscuraExibition.page.landing',['title' => 'OBSCURA EXHIBITION']);
    })->name('homeExhibition');
    
    Route::get('/about-us',function(){
        return view('ObscuraExibition.page.about',['title' => 'ABOUT OBSCURA EXHIBITION']);
    })->name('aboutExhibition');
    
    Route::get('/komite',function(){
        return view('ObscuraExibition.page.komite',['title' => 'OUR COMMITTEE']);
    })->name('komiteExhibition');
    
    Route::get('/gallery',function(){
        return view('ObscuraExibition.page.gallery',['title' => 'GALLERY']);
    })->name('galleryExhibition');
});

