<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NoticeType;

use DB;
use Illuminate\Support\Str;
use Validator;
use Hash;
use App\CourseName;
use App\Department;
use App\AcademicSession;
use App\Faculty;
use App\Role;

class HomeController extends Controller
{
    public function ViewHomaPage(){
    	return view('frontend.pages.home');
    }


    public function ViewSinglePage(){
    	return view('frontend.pages.single');
    }

    public function ViewAdmisionPage(){
    	$data = array();
    	$data['faculties'] =  Faculty::with('Departments')->get();
    	return view('frontend.pages.admission_view',$data);
    }

}
