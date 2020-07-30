<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ViewHomaPage(){
    	return view('frontend.pages.home');
    }


    public function ViewSinglePage(){
    	return view('frontend.pages.single');
    }

}
