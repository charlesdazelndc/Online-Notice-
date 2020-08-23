<?php

namespace App\Http\Controllers\backend;

use App\About;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\NoticeType;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;
use App\User;
use Carbon\Carbon;

use App\AcademicNotice;
use App\CourseName;
use App\Department;
use App\AcademicSession;
use Validator;
use Hash;
use Auth;
use App\Role;


class HomeController extends Controller
{
   public function ViewHomePage(){

//       $id =auth()->user()->id;
//       dd($id);
       $data = array();

       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['academic_notices'] = AcademicNotice::with('CourseName','AcademicSession','Faculty','Department','User')
                                    ->select('academic_notices.*','course_name_id','academic_session_id','department_id','faculty_id','notice_type_id','user_id')
                                    ->orderBy('academic_notices.id','DESC')
                                    ->paginate(10);


   	return view('backend.pages.home',$data);

      }
}
