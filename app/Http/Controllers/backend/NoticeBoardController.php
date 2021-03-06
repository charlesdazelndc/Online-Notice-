<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\NoticeType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;
use App\AcademicNotice;
use DB;
use Validator;
use Hash;
use App\CourseName;
use App\Department;
use App\AcademicSession;
use App\Faculty;
use App\Role;
use App\About;






class NoticeBoardController extends Controller
{


    public function AddNoticeBoard(Request $request)
    {

        
       
//          dd($request->all());
        $validator = Validator::make($request->all(), [
            'department_id' => 'required',
            'academic_session_id' => 'required',
            'course_name_id' => 'required',
            'faculty_id' => 'required',
            'notice_type_id' => 'required',
            'title' => 'required|string',
            'description' => 'required|string',
            'notice_image' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            'notice_date' => 'required|date',
            'start_date' => 'required|date',
            'end_date' => 'required|date',



        ]);


        if ($request->hasFile('notice_image')) {
            $notice_image = $request->file('notice_image');
            $file_name = uniqid('notice_image', true) . str::random(10) . '.' . $notice_image->getClientOriginalExtension();
            if ($notice_image->isValid()) {
                $notice_image_save = $notice_image->storeAs('notice_image', $file_name);
            }
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $data = [

            'user_id' => 4,
            'department_id' => $request['department_id'],
            'academic_session_id' => $request['academic_session_id'],
            'course_name_id' => $request['course_name_id'],
            'faculty_id' => $request['faculty_id'],
            'notice_type_id' => $request['notice_type_id'],
            'title' => $request['title'],
            'title_slug' => Str::slug($request['title']),
            'description' => $request['description'],
            'notice_image' => $notice_image_save,
            'notice_date' => $request['notice_date'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],


        ];
        try {

            AcademicNotice::create($data);
            session()->flash('type', 'success');
            session()->flash('message', 'notice insert is successfully');
            return redirect()->back();

        } catch (Exception $e) {

            session()->flash('type', 'danger');
            session()->flash('message', $e->getmessage);
            return redirect()->back();
        }

    }

    public function StatusActive($id)
    {
        $notice = AcademicNotice::find($id);
//       dd($notice);
        if ($notice->status == 0) {
            $status_active = AcademicNotice::where('id', $notice->id)->update(['status' => 1]);
        }
        return redirect()->back();


    }

    public function StatusInactive($id)
    {
        $notice = AcademicNotice::find($id);
//       dd($notice);
        if ($notice->status == 1) {
            $status_active = AcademicNotice::where('id', $notice->id)->update(['status' => 0]);
        }

        return redirect()->back();

    }

    public function NoticeEdit($id)
    {


       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();

        $data['notice'] =DB::table('academic_notices')
            ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
            ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
            ->join('departments', 'academic_notices.department_id','=','departments.id')
            ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
            ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
            ->where('academic_notices.id',$id)
            ->select('academic_notices.*','notice_types.notice_type_name','course_names.course_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')

            ->first();

       

       // foreach ($data['faculties'] as $faculty) {

       //   foreach ($data['departments']  as $depart) {
       //      print_r($depart);
       //   }
       // }



        return view('backend.pages.notice_edit',$data);


    }
    public  function NoticeUpdate(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'department_id' => 'required',
            'academic_session_id' => 'required',
            'course_name_id' => 'required',
            'faculty_id' => 'required',
            'notice_type_id' => 'required',
            'title' => 'required|string',
            'description' => 'required|string',
            'notice_image' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            'notice_date' => 'required|date',
            'start_date' => 'required|date',
            'end_date' => 'required|date',



        ]);

        if ($request->hasFile('notice_image')) {
            $notice_image = $request->file('notice_image');
            $file_name = uniqid('notice_image', true) . str::random(10) . '.' . $notice_image->getClientOriginalExtension();
            if ($notice_image->isValid()) {
                $notice_image_update = $notice_image->storeAs('notice_image', $file_name);
            }
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }




        $data = [

            'department_id' => $request['department_id'],
            'academic_session_id' => $request['academic_session_id'],
            'course_name_id' => $request['course_name_id'],
            'faculty_id' => $request['faculty_id'],
            'notice_type_id' => $request['notice_type_id'],
            'title' => $request['title'],
            'title_slug' => Str::slug($request['title']),
            'description' => $request['description'],
            'notice_image' => $notice_image_update,
            'notice_date' => $request['notice_date'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],


        ];
       $notice_update = AcademicNotice::where('id',$id)->update($data);
        return redirect()->route('deshboard');


    }
    public  function NoticeView($id){
        $data['notice'] =DB::table('academic_notices')
            ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
            ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
            ->join('departments', 'academic_notices.department_id','=','departments.id')
            ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
            ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
            ->where('academic_notices.id',$id)
            ->select('academic_notices.*','notice_types.notice_type_name','course_names.course_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
            ->first();
        return view('backend.pages.notice_view',$data);
    }
    public function NoticeDelete($id){
        $notice = AcademicNotice::find($id)->delete();
        return redirect()->back();
    }




    public function NoticeFilter($id){
    $data = array();

      $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();
//       dd($data['about']->about_description);




       $data['academic_notices'] =DB::table('academic_notices')
           ->join('course_names', 'academic_notices.course_name_id', '=', 'course_names.id')
           ->join('academic_sessions','academic_notices.academic_session_id','=', 'academic_sessions.id')
           ->join('departments', 'academic_notices.department_id','=','departments.id')
           ->join('faculties',  'academic_notices.faculty_id','=','faculties.id' )
           ->join('notice_types',  'academic_notices.notice_type_id','=','notice_types.id' )
           ->select('academic_notices.*','course_names.course_name','notice_types.notice_type_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
           ->where('notice_types.id',$id)
           ->orderBy('academic_notices.id','DESC')
           ->paginate(10);

        return view('backend.pages.notice-list',$data);

    }



    public  function ViewDepartment(){
        $data = array();
       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();
      
      $data['departments'] = Department::all();

        return view('backend.pages.add_depart_view',$data);
    }

    public  function AddDepartment(Request $request){


        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'dept_full_name' => 'required',
            'faculty_id' => 'required',
            'description' => 'required',
            'dept_image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('dept_image')) {
            $dept_image = $request->file('dept_image');
            $file_name = uniqid('dept_image', true) . str::random(10) . '.' . $dept_image->getClientOriginalExtension();
            if ($dept_image->isValid()) {
                $dept_image_save = $dept_image->storeAs('dept_image', $file_name);
            }
        }

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }




        $data = [
            'name' => $request['name'],
            'dept_full_name' => $request['dept_full_name'],
            'faculty_id' => $request['faculty_id'],
            'description' => $request['description'],
            'dept_image' => $dept_image_save,
        ];
        try {

            Department::create($data);
            session()->flash('type', 'success');
            session()->flash('message', 'notice insert is successfully');
            return redirect()->back();

        } catch (Exception $e) {

            session()->flash('type', 'danger');
            session()->flash('message', $e->getmessage);
            return redirect()->back();
        }

    }




}
