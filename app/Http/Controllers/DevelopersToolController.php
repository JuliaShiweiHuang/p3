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


      public function getPracticeUser() {
          return view('developer.getUserGenerator');
      }

      public function postPracticeUser(Request $request) {
        $this->validate($request,[
            'users' => 'required'
        ]);
        # generate faker class;
        $faker = Faker\Factory::create();
        $name = $faker->name;
        $address = $faker->address;
        $text = $faker->text;

        return view('developer.getUserGenerator')->with('users',$name)
                                                 ->with('profile', $address);

      }
}
?>
