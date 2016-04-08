<?php

Route::group(['middleware' => ['web']], function () {

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
