<?php

namespace App\Http\Controllers\backend;

use App\AcademicSession;
use App\CourseName;
use App\Department;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\NoticeType;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Validator;
use Hash;
use Auth;

class UserController extends Controller
{



   public function UserList(){
       $data = array();
       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['roles'] = Role::all();



       $data['users'] =DB::table('users')
           ->join('course_names', 'users.course_name_id', '=', 'course_names.id')
           ->join('academic_sessions','users.academic_session_id','=', 'academic_sessions.id')
           ->join('departments', 'users.department_id','=','departments.id')
           ->join('faculties',  'users.faculty_id','=','faculties.id' )
           ->join('roles',  'users.role_id','=','roles.id')
           ->select('users.*','course_names.course_name','roles.role_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
           ->get();
//       dd($data['users']);
       return view('backend.pages.user',$data);
   }


   public function UserProfileEdit($id){
       $data['user'] =DB::table('users')
           ->join('course_names', 'users.course_name_id', '=', 'course_names.id')
           ->join('academic_sessions','users.academic_session_id','=', 'academic_sessions.id')
           ->join('departments', 'users.department_id','=','departments.id')
           ->join('faculties',  'users.faculty_id','=','faculties.id' )
           ->join('roles',  'users.role_id','=','roles.id')
           ->where('users.id',$id)
           ->select('users.*','roles.role_name','course_names.course_name','academic_sessions.academic_session','departments.name as department_name','faculties.name as faculty_name')
           ->first();

       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['roles'] = Role::all();

       return view('backend.pages.user_profile_edit',$data);

   }

   public function UserProfileUpdate(Request $request,$id){
       $validator              = Validator::make($request->all(),[
           'full_name'            => 'required|string|max:255',
           'telephone'            => 'required|min:11',
           'email'                => 'sometimes|required|string|email|max:255|unique:users,email',
           'profile_image'        => 'required|image|',
           'role_id'              => 'required',
           'department_id'        => 'required',
           'academic_session_id'  => 'required',
           'course_name_id'       => 'required',
           'faculty_id'           => 'required'
       ]);
       if ($request->hasFile('profile_image')) {
           $profile_image = $request->file('profile_image');
           $file_name = uniqid('profile_image',true).str::random(10).'.'.$profile_image->getClientOriginalExtension();
           if ($profile_image->isValid()) {
               $profile_image_save = $profile_image->storeAs('profile_images',$file_name);
           }
       }

       if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput();
       }





       $data = [

           'full_name' => rtrim($request->input('full_name')),
           'role_id'  =>$request->input('role_id'),
           'email'    =>rtrim(Str::lower($request->input('email'))),
           'profile_image' =>$profile_image_save,
           'telephone'  =>$request->input('telephone'),
           'department_id'  =>$request->input('department_id'),
           'academic_session_id'  =>$request->input('academic_session_id'),
           'course_name_id'  =>$request->input('course_name_id'),
           'faculty_id'  =>$request->input('faculty_id'),
           'status' =>0,
       ];

       $update_user = User::find($id)->update($data);
       return redirect()->route('UserList');

   }
   public  function UserProfileView($id){
       $data['user'] =DB::table('users')
           ->join('course_names', 'users.course_name_id', '=', 'course_names.id')
           ->join('academic_sessions','users.academic_session_id','=', 'academic_sessions.id')
           ->join('departments', 'users.department_id','=','departments.id')
           ->join('faculties',  'users.faculty_id','=','faculties.id' )
           ->join('roles',  'users.role_id','=','roles.id' )
           ->where('users.id',$id)
           ->select('users.*','course_names.course_name','academic_sessions.academic_session','departments.name as department_name','roles.role_name','faculties.name as faculty_name')
           ->first();
       return view('backend.pages.user_profile_view',$data);
   }

   public function UserProfileDelete($id){
       $user_id = User::find($id)->delete();
       return redirect()->back();
   }
}
