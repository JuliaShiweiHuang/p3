<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DevelopersToolController extends Controller
{
    //
    public function getLoremIpsumGenerator() {
       return 'Lorem Ipsum Generator';
    }

   public function getUserGenerator() {
       return 'How many users?';
   }
}
