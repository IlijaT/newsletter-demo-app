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
    return view('welcome');
})->name('home-page');

Route::post('newsletters/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');

Route::get('campaigns', 'CampaignsController@index')->name('campaigns.index');
Route::get('campaigns/create', 'CampaignsController@create')->name('campaigns.create');
Route::post('campaigns', 'CampaignsController@store')->name('campaigns.store');


