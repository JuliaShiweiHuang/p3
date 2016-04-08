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
        // $generator = new Generator();
        // $paragraphs = $generator->getParagraphs($numOfParagraphs);
        // return view('developer.practiceLoremIpsum')->with('paragraphs', $paragraphs);
   }
   public function postPractice(Request $request) {
        // $_POST['number_of_paragraphs'] = $numOfParagraphs;
        // $numOfParagraphs = $_POST['number_of_paragraphs'];
        $this->validate($request,[
            'number_of_paragraphs' => 'required'
        ]);


        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($numOfParagraphs);
        return view('developer.showLoremIpsum')->with('paragraphs', $paragraphs);
   }


}
?>
