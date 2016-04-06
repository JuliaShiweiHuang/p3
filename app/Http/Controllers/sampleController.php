<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sampleController extends Controller
{
    public function getSample() {
        return 'get a sample of this web application';
    }
}
