<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('auth')->group(function(){
    //api/auth/register
    Route::post('/register','App\Http\Controllers\AuthController@register')->name('register');
    Route::post('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout')->middleware('auth:api');
    Route::get('/user', 'AuthController@user')->middleware('auth:api');
    Route::get('authentication-failed', 'AuthController@authFailed')->name('auth-failed');
});

Route::group(['prefix' =>'lookups', 'middleware' => 'auth:api'], function (){
    Route::resource('category','CategoryController');
    Route::resource('country','CountryController');
});

Route::group(['middleware' => 'auth:api'], function (){

    //Opportunities
    Route::resource('opportunity','OpportunityController');
 //  Route::resource('opportunity/{opportunity}','OpportunityController@show');

    // Questions
    Route::get('questions','QuestionController@index');
    Route::post('question','QuestionController@store');
    Route::put('question/{question}','QuestionController@update');

    // Favorites
    Route::get('favorites','FavoriteController@index');
    Route::post('favorite','FavoriteController@store');
    Route::put('favorite/{favorite}','FavoriteController@update');

    //mzeli: Upload Images for Opportunities and Forum
});

