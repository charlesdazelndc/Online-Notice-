<?php

namespace App\Http\Controllers\frontend;
use App\AcademicSession;
use App\CourseName;
use App\AcademicNotice;
use App\Department;
use App\Faculty;
use App\NoticeType;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;


class DepartmentController extends Controller
{
    public function ViewDepartment($id){


        $data = array();

       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();

    
        

        $data['recent_notices']    = AcademicNotice::where('status', 1)->where('department_id',$id)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['academic_notices'] = AcademicNotice::where('status', 1)->where('department_id',$id)->where('notice_type_id', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['event_notices']    = AcademicNotice::where('status', 1)->where('department_id',$id)->where('notice_type_id', 2)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['admission_notices']= AcademicNotice::where('status', 1)->where('department_id',$id)->where('notice_type_id', 3)->orderBy('id', 'DESC')->limit(4)->get();
 
    
        $data['department'] = Department::find($id);
        return view('frontend.pages.department_view',$data);

    }
    public function ViewDepartmentStudents($dept_id,$sess_id){

       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();
    	 $data['department'] = Department::find($dept_id);
       
    	 $data['students'] =DB::table('users')
           ->join('course_names', 'users.course_name_id', '=', 'course_names.id')
           ->join('academic_sessions','users.academic_session_id','=', 'academic_sessions.id')
           ->join('departments', 'users.department_id','=','departments.id')
           ->join('faculties',  'users.faculty_id','=','faculties.id' )
           ->join('roles',  'users.role_id','=','roles.id')
           ->select('users.*','course_names.course_name','roles.role_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
           ->where('users.department_id','=',$dept_id)
           ->where('users.academic_session_id','=',$sess_id)
           ->where('users.role_id',2)
           ->get();
           // dd($data['students']);

           return view('frontend.pages.student_view',$data); 

    }
    public function DepartMenu(){
      $dept = Department::with('Faculty')->all();
      dd( $dept);
    }
}
