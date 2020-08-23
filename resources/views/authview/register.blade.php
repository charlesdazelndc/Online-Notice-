
    @extends('frontend.master')
    @section('pages')
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('{{asset('frontend')}}/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{route('homepage')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>
<div class="container">
    <div class="register-tab">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Register as Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Register as Teacher</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Register as Others</a>
  </li>
  </ul>
</div>

</div>



<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
 <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}}">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">@csrf
             <div class="row">


                    <div class="col-md-6">




                            <div class="col-md-12 form-group">
                                <label for="full_name">Fullname</label>
                                <input type="text" id="full_name" name="full_name" value="{{old('full_name')}}" class="@error('full_name') is-invalid @enderror form-control form-control-lg">
                               {{--  @error('fullname')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}

                            </div>


                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control form-control-lg">
                            </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password_confirmtion">Re-type Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="telephone">Telephone</label>
                            <input type="text" name="telephone" value="{{old('telephone')}}" id="telephone" class="form-control form-control-lg">
                        </div>




                    </div>
                 <div class="col-md-6">


                     <div class="col-md-12 form-group">
                         <label for="type">type</label>
                         <select type="text" id="role_id" name="role_id" value="{{old('role_id')}}" class="form-control form-control-lg">
                             <option value="2">Student</option>
                            

                         </select>
                     </div>


                     <div class="col-md-12 form-group">
                         <label for="department_id">Department</label>
                         <select class="form-control" name="department_id" id="department_id" >
                             @if(isset($departments))
                                 <option value="0">Select department</option>
                                 @foreach($departments as $department)
                                     <option value="{{$department->id}}">{{$department->name}}</option>
                                 @endforeach
                             @endif

                         </select>
                         {{--  @error('fullname')
                               <div class="alert alert-danger">{{ $message }}</div>
                              @enderror --}}

                     </div>
                     <div class="col-md-12 form-group">
                         <label for="academic_session_id">session</label>
                         <select class="form-control" name="academic_session_id" id="academic_session_id" >
                             @if(isset($academic_sessions))
                                 <option value="0">Select session</option>
                                 @foreach($academic_sessions as $academic_session)

                                     <option value="{{$academic_session->id}}">{{$academic_session->academic_session}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>
                     <div class="col-md-12 form-group">
                         <label for="course_name_id">Course Type</label>
                         <select class="form-control" name="course_name_id" id="course_name_id" >
                             @if(isset($courses))
                                 <option value="0">Select Course</option>
                                 @foreach($courses as $course)

                                     <option value="{{$course->id}}">{{$course->course_name}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>
                     <div class="col-md-12 form-group">
                         <label for="faculty_id">Faculty</label>
                         <select class="form-control" name="faculty_id" id="faculty_id" >
                             @if(isset($faculties))
                                 <option value="0">Select Faculty</option>
                                 @foreach($faculties as $faculty)
                                     <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>


                     <div class="col-md-12 form-group">
                         <label for="profile_image">Profile Image</label>
                         <br>
                         <input type="file" name="profile_image" value="{{old('profile_image')}}" id="profile_image" >
                     </div>

                 </div>




        </div>
                <div class="row">
                    <input type="submit" value="Register" class="btn btn-primary btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>

</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}}">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">@csrf
             <div class="row">


                    <div class="col-md-6">




                            <div class="col-md-12 form-group">
                                <label for="full_name">Fullname</label>
                                <input type="text" id="full_name" name="full_name" value="{{old('full_name')}}" class="@error('full_name') is-invalid @enderror form-control form-control-lg">
                               {{--  @error('fullname')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}

                            </div>


                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control form-control-lg">
                            </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password_confirmtion">Re-type Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="telephone">Telephone</label>
                            <input type="text" name="telephone" value="{{old('telephone')}}" id="telephone" class="form-control form-control-lg">
                        </div>




                    </div>
                 <div class="col-md-6">


                     <div class="col-md-12 form-group">
                         <label for="type">type</label>
                         <select type="text" id="role_id" name="role_id" value="{{old('role_id')}}" class="form-control form-control-lg">
                             <option value="3">Teacher</option>
                        </select>
                     </div>


                     <div class="col-md-12 form-group">
                         <label for="department_id">Department</label>
                         <select class="form-control" name="department_id" id="department_id" >
                             @if(isset($departments))
                                 <option value="0">Select department</option>
                                 @foreach($departments as $department)
                                     <option value="{{$department->id}}">{{$department->name}}</option>
                                 @endforeach
                             @endif

                         </select>
                         {{--  @error('fullname')
                               <div class="alert alert-danger">{{ $message }}</div>
                              @enderror --}}

                     </div>
                    
                     <div class="col-md-12 form-group">
                         <label for="course_name_id">Course Type</label>
                         <select class="form-control" name="course_name_id" id="course_name_id" >
                             @if(isset($courses))
                                 <option value="0">Select Course</option>
                                 @foreach($courses as $course)

                                     <option value="{{$course->id}}">{{$course->course_name}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>
                     <div class="col-md-12 form-group">
                         <label for="faculty_id">Faculty</label>
                         <select class="form-control" name="faculty_id" id="faculty_id" >
                             @if(isset($faculties))
                                 <option value="0">Select Faculty</option>
                                 @foreach($faculties as $faculty)
                                     <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>


                     <div class="col-md-12 form-group">
                         <label for="profile_image">Profile Image</label>
                         <br>
                         <input type="file" name="profile_image" value="{{old('profile_image')}}" id="profile_image" >
                     </div>

                 </div>




        </div>
                <div class="row">
                    <input type="submit" value="Register" class="btn btn-primary btn-lg btn-block">
                </div>
            </form>
        </div>
    </div> 
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}}">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">@csrf
             <div class="row">


                    <div class="col-md-6">




                            <div class="col-md-12 form-group">
                                <label for="full_name">Fullname</label>
                                <input type="text" id="full_name" name="full_name" value="{{old('full_name')}}" class="@error('full_name') is-invalid @enderror form-control form-control-lg">
                               {{--  @error('fullname')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}

                            </div>


                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control form-control-lg">
                            </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password_confirmtion">Re-type Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="telephone">Telephone</label>
                            <input type="text" name="telephone" value="{{old('telephone')}}" id="telephone" class="form-control form-control-lg">
                        </div>




                    </div>
                 <div class="col-md-6">


                     <div class="col-md-12 form-group">
                         <label for="type">type</label>
                         <select type="text" id="role_id" name="role_id" value="{{old('role_id')}}" class="form-control form-control-lg">
                             <option value="4">Others</option>
                            

                         </select>
                     </div>


                     <div class="col-md-12 form-group">
                         <label for="department_id">Department</label>
                         <select class="form-control" name="department_id" id="department_id" >
                             @if(isset($departments))
                                 <option value="0">Select department</option>
                                 @foreach($departments as $department)
                                     <option value="{{$department->id}}">{{$department->name}}</option>
                                 @endforeach
                             @endif

                         </select>
                         {{--  @error('fullname')
                               <div class="alert alert-danger">{{ $message }}</div>
                              @enderror --}}

                     </div>
                    
                     <div class="col-md-12 form-group">
                         <label for="course_name_id">Course Type</label>
                         <select class="form-control" name="course_name_id" id="course_name_id" >
                             @if(isset($courses))
                                 <option value="0">Select Course</option>
                                 @foreach($courses as $course)

                                     <option value="{{$course->id}}">{{$course->course_name}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>
                     <div class="col-md-12 form-group">
                         <label for="faculty_id">Faculty</label>
                         <select class="form-control" name="faculty_id" id="faculty_id" >
                             @if(isset($faculties))
                                 <option value="0">Select Faculty</option>
                                 @foreach($faculties as $faculty)
                                     <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                 @endforeach
                             @endif

                         </select>
                     </div>


                     <div class="col-md-12 form-group">
                         <label for="profile_image">Profile Image</label>
                         <br>
                         <input type="file" name="profile_image" value="{{old('profile_image')}}" id="profile_image" >
                     </div>

                 </div>




        </div>
                <div class="row">
                    <input type="submit" value="Register" class="btn btn-primary btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>

  </div>
</div>
   


    @endsection
