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
});

Route::post('newsletters/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');
Route::get('campaigns/create', 'NewsletterCampaignController@create')->name('campaigns.create');
Route::post('campaigns', 'NewsletterCampaignController@store')->name('campaigns.store');


