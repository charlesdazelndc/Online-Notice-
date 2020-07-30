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

       $data['about'] = About::first();
//       dd($data['about']->about_description);




       $data['academic_notices'] =DB::table('academic_notices')
           ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
           ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
           ->join('departments', 'academic_notices.department_id','=','departments.id')
           ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
           ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
           ->select('academic_notices.*','course_names.course_name','notice_types.notice_type_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
//           ->where('academic_notices.status',1)
           ->orderBy('academic_notices.id','DESC')
           ->paginate(10);

   	return view('backend.pages.home',$data);

      }
}
