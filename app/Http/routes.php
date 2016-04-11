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
    # route for the lorem ipsum page to display the form via GET method
    // first time go to a webpage
    Route::get('/practiceLoremIpsum', 'DevelopersToolController@getPractice');

    # route for the lorem ipsum page to process the form via POST method
    Route::post('/practiceLoremIpsum', 'DevelopersToolController@postPractice');

    Route::get('/books', 'BookController@getIndex');

    Route::get('/sample', 'sampleController@getSample');

});
