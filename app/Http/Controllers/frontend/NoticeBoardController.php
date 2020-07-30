<?php

namespace App\Http\Controllers\frontend;

use App\About;
use App\AcademicNotice;
use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeBoardController extends Controller
{
    public  function GetNotice()
    {
        $data = array();
        $data['recent_notices']     = AcademicNotice::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['academic_notices']  = AcademicNotice::where('status', 1)->where('notice_type_id', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['event_notices']     = AcademicNotice::where('status', 1)->where('notice_type_id', 2)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['admission_notices'] = AcademicNotice::where('status', 1)->where('notice_type_id', 3)->orderBy('id', 'DESC')->limit(4)->get();
        $data['departments']        =Department::all();
        $data['about'] = About::first();


        $data['events'] =DB::table('academic_notices')
            ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
            ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
            ->join('departments', 'academic_notices.department_id','=','departments.id')
            ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
            ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
            ->select('academic_notices.*','course_names.course_name','notice_types.notice_type_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
           ->where('academic_notices.status',1)
           ->where('academic_notices.notice_type_id',2)
            ->orderBy('academic_notices.id','DESC')
            ->limit(4)
           ->get();

        $data['news'] =DB::table('academic_notices')
            ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
            ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
            ->join('departments', 'academic_notices.department_id','=','departments.id')
            ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
            ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
            ->select('academic_notices.*','course_names.course_name','notice_types.notice_type_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
            ->where('academic_notices.status',1)
            ->where('academic_notices.notice_type_id',4)
            ->orderBy('academic_notices.id','DESC')
            ->limit(4)
            ->get();


        return view('frontend.pages.home', $data);
    }

    public function SingleNoticeView($id){
        $data = array();

        $data['notice'] = AcademicNotice::find($id);
        $data ['academic_notices']  = AcademicNotice::where('status', 1)->where('notice_type_id', 1)->orderBy('id', 'DESC')->limit(10)->get();
        $data ['event_notices']     = AcademicNotice::where('status', 1)->where('notice_type_id', 2)->orderBy('id', 'DESC')->limit(10)->get();
        $data ['admission_notices'] = AcademicNotice::where('status', 1)->where('notice_type_id', 3)->orderBy('id', 'DESC')->limit(10)->get();

        $data['recent_notices']     = AcademicNotice::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        return view('frontend/pages/notice_view',$data);
    }


    public function  AllNoticeView(){
        $data['academic_notices'] =DB::table('academic_notices')
            ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
            ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
            ->join('departments', 'academic_notices.department_id','=','departments.id')
            ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
            ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
            ->select('academic_notices.*','course_names.course_name','notice_types.notice_type_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
            ->where('academic_notices.status',1)
            ->orderBy('academic_notices.id','DESC')
            ->get();

        $data['recent_notices']     = AcademicNotice::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['academic_notices']  = AcademicNotice::where('status', 1)->where('notice_type_id', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['event_notices']     = AcademicNotice::where('status', 1)->where('notice_type_id', 2)->orderBy('id', 'DESC')->limit(4)->get();
        $data ['admission_notices'] = AcademicNotice::where('status', 1)->where('notice_type_id', 3)->orderBy('id', 'DESC')->limit(4)->get();


        return view('frontend.pages.all_notice_view',$data);


    }


    public function ViewDepartment($id){

        $data = array();
        $data['department'] = Department::find($id);
        return view('frontend.pages.department_view',$data);

    }

    public  function  ViewAbout(){
        $data = array();
        $data['about'] = About::first();
        return view('frontend.pages.about',$data);
    }


}
