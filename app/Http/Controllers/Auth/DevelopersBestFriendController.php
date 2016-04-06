<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;

class DevelopersBestFriendController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    // different methods
    // for example: getIndex method to list all the books
    public function getLoremIpsumGenerator() {
        return 'Lorem Ipsum Generator';
    }

    public function getUserGenerator() {
        return 'How many users?';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($id) {
        return 'Show book: '.$id;
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        return 'Form to create a new book';
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Process adding new book';
    }
}
