<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Badcow\LoremIpsum\Generator;
class DevelopersToolController extends Controller
{
    public function getHome() {
        return view('developer.home');
    }


    public function getLoremIpsumGenerator() {
        return view('developer.userGenerator');
    //    return 'Lorem Ipsum Generator';

    }

   public function getUserGenerator() {
       return view('developer.loremIpsumGenerator');
    //    return 'How many users?';
   }

   public function getPractice() {

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs(5);
        return view('developer.practiceLoremIpsum')->with('paragraphs', $paragraphs);
   }



}
