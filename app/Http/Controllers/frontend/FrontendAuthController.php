<?php

namespace App\Http\Controllers\frontend;


use App\CourseName;
use App\Department;
use App\AcademicSession;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\Mail\ForgetPasswordMail;
use App\Mail\VerificationEmail;
use App\Role;
use App\NoticeType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Validator;
use Hash;
use Auth;


class FrontendAuthController extends Controller
{


      public function ShowLoginPage(){

        
       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['notice_types'] = NoticeType::all();
       $data['roles'] = Role::all();
          if (auth()->check()){
              return  redirect()->route('homepage');
          }
          return view('authview.login',$data);
   }



   public function ProcessLogin(Request $request){

    if(auth()->check())
    {
       session()->flash('type','success');
       session()->flash('message','You Are Already Logged');
        return redirect()->back();
    }
    else {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = [
            'email' => rtrim($request['email']),
            'password' => rtrim($request['password'])
        ];


        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->email_verified == 0) {
                session()->flash('type', 'success');
                session()->flash('message', 'please Wait For Admin Approval');
                auth()->logout();
                return redirect()->back();
            } else {

                if($user->role_id==1){
                    session()->flash('type', 'success');
                    session()->flash('message', 'we are sucessfully login');
                    return redirect()->route('deshboard');
                }

                if ($user->role_id==3){
                    return  redirect()->route('teacherDeshboard');
                }


                if($user->role_id==3){
                    return redirect()->route('deshboard');
                }
                // session()->flash('type', 'success');
                // session()->flash('message', 'we are sucessfully login');
                return redirect()->route('homepage');
            }

        }

        session()->flash('type', 'danger');
        session()->flash('message', 'credentials Invalid');
        return redirect()->back();

    }
    }

   public function ShowRegisterPage(){
       $data = array();

       $data['academic_sessions'] = AcademicSession::all();
       $data['courses']  =CourseName::all();
       $data['departments'] = Department::all();
       $data['faculties'] = Faculty::all();
       $data['roles'] = Role::where('id', '>', 1)->get();


   	return view('authview.register',$data);
   }

   public function ProcessRegister(Request $request){

//dd($request->all());

      $validator              = Validator::make($request->all(),[
      'full_name'             => 'required|string|max:255',
      'telephone'            => 'required|min:11|unique:users,telephone',
      'email'                => 'sometimes|required|string|email|max:255|unique:users,email',
      'password'             => 'required|min:6|confirmed',
      'profile_image'        => 'required|image|',
      'role_id'              => 'required',
      'department_id'        => 'required',
      
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
    	'password' =>Hash::make($request->input('password')),
    	'email_verified_at' =>Carbon::Now(),
    	'email_verified'    => 0,
    	'email_verified_token'=>Str::random(60)

    ];

    try{

    	$user = User::create($data);

      Mail::to($user->email)->send(new VerificationEmail($user));
    	session()->flash('type','success');
    	session()->flash('message','Registration is successfull.Please check your email for active');
    	return redirect()->back();
    }catch (Exception $e) {
            session()->flash('message',$e->getmassge());
            session()->flash('type','danger');
            return redirect()->back();
          }
        }


public function varifyEmail($token=null){

       if($token==null){
           session()->flash('type','danger');
           session()->flash('message','Invalid Token');
           return redirect()->back();
       }
       $user =User::where('email_verified_token',$token)->first();
       if ($user==null){
           session()->flash('type','danger');
           session()->flash('message','Invalid Token');
           return redirect()->back();
       }
    $data=[
        'email_verified' =>1,
        'email_verified_at' => Carbon::now(),
        'email_verified_token' =>'',
        'status'               =>1
    ];
    $user->update($data);

    return redirect('/');
}
public function processLogout(){
        auth()->logout();
        session()->flash('type','success');
        session()->flash('message','you are successfully Logout');
        return redirect('/');

}

}
