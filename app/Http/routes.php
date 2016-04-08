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

    // Beginning of temporary home page
    // Route::get('/', function() {
    //     return 'This is temporary placeholder for Developers Best Friend Page';
    // });
    // The end of my temporary Home page

    Route::get('/', 'DevelopersToolController@getHome');


    Route::get('/lorem-ipsum', 'DevelopersToolController@getLoremIpsumGenerator');

    Route::get('/user-generator', 'DevelopersToolController@getUserGenerator');




    Route::get('/practice', function() {
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(5);
        return implode('<p>', $paragraphs);

    });

    Route::get('/practiceLoremIpsum', 'DevelopersToolController@getPractice');

    Route::get('/books', 'BookController@getIndex');

    Route::get('/sample', 'sampleController@getSample');


});
