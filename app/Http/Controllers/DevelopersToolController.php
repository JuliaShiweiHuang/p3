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
       return view('developer.getLoremIpsum');
   }
   public function postPractice(Request $request) {
        $this->validate($request,[
            'number_of_paragraphs' => 'required'
        ]);


        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('number_of_paragraphs'));
        return view('developer.getLoremIpsum')->with('paragraphs', $paragraphs);
   }


}
?>
