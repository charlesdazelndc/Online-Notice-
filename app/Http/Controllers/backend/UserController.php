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
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::where('id','>',1)->get();

       $data['users'] =User::with('CourseName','AcademicSession','Faculty','Department','Role')->select('users.*','course_name_id','academic_session_id','department_id','faculty_id','role_id')->get();
//       dd($data['users']);
       return view('backend.pages.user',$data);
   }


   public function AdminUser($id){

     $data = array();
     $data['academic_sessions'] = AcademicSession::all();
     $data['courses']  =CourseName::all();
     $data['departments'] = Department::all();
     $data['faculties'] = Faculty::all();
     $data['notice_types'] = NoticeType::all();
     $data['roles'] = Role::all();

     $data['users'] = User::with('CourseName','AcademicSession','Faculty','Department','Role')
     ->select('users.*')
     ->where('users.role_id','=',$id)
     ->get();

     

     return view('backend.pages.admin-list',$data);
   }


   public function UserProfileEdit($id){
       $data['user'] =$data['users'] = User::with('CourseName','AcademicSession','Faculty','Department','Role')
        ->select('users.*')
        ->where('users.id','=',$id)
        ->first();

       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();

       return view('backend.pages.user_profile_edit',$data);

   }

   public function UserProfileUpdate(Request $request,$id){

  
       $validator              = Validator::make($request->all(),[
           'full_name'            => 'required|string|max:255',
           'telephone'            => 'required|min:11',
           'email'                => 'required',
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
       $data['user'] =$data['user'] =$data['users'] = User::with('CourseName','AcademicSession','Faculty','Department','Role')
        ->select('users.*')
        ->where('users.id','=',$id)
        ->first();
       return view('backend.pages.user_profile_view',$data);
   }

   public function UserProfileDelete($id){
       $user_id = User::find($id)->delete();
       return redirect()->back();
   }
}
