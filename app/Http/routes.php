<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get('/', function () {
    //     return 'Developer&apos;s Best Friend';
    // });
    Route::get('/', function() {
        return 'This is temporary placeholder for Developers Best Friend Page';
    });

    Route::get('/lorem-ipsum', 'DevelopersToolController@getLoremIpsumGenerator');

    Route::get('/userGenerator', 'DevelopersToolController@getUserGenerator');


    Route::get('/books', 'BookController@getIndex');


    Route::get('/sample', 'sampleController@getSample');

    Route::get('/user-generator', function () {

        $view = '<form method="POST" action="/user-generator">';;
        $view = csrf_field();
        $view .= 'How many users? <input type = "text" name="numUsers">';
        $view .= '<input type="submit">';
        $view .= '</form>';



        return $view;


    });

});
