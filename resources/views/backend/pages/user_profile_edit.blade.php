@extends('backend.master')
@section('pages')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="container-fluid">


                <div class="row">



                    <form action="{{route('UserProfileUpdate',$user->id)}}" method="post" enctype="multipart/form-data">@csrf
                        <div class="row">


                            <div class="col-md-6">

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

                                    <div class="col-md-12 form-group">
                                        <br>
                                        <label for="full_name">Fullname</label>
                                        <input type="text" id="full_name" name="full_name" value="{{$user->full_name}}" class="form-control form-control-lg">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control form-control-lg">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="telephone">Telephone</label>
                                        <input type="text" id="telephone" name="telephone" value="{{$user->telephone}}" class="form-control form-control-lg">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="type">type</label>
                                        <select type="text" id="role_id" name="role_id" value="{{old('role_id')}}" class="form-control form-control-lg">
                                            @if(isset($roles))
                                                <option value="{{$user->Role->id}}">{{$user->Role->role_name}}</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group">
                                    <label for="academic_session_id">Department</label>
                                    <select class="form-control" name="department_id" id="academic_session_id" >
                                        @if(isset($departments))
                                            <option value="{{$user->Department->id}}">{{$user->Department->name}}</option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                                @if(!empty($user->AcademicSession->academic_session))
                                <div class="col-md-12 form-group">
                                    <label for="academic_session_id">session</label>
                                    <select class="form-control" name="academic_session_id" id="academic_session_id" >
                                        @if(isset($academic_sessions))
                                        <option value="{{$user->AcademicSession->id}}">{{$user->AcademicSession->academic_session}}</option>
                                        @foreach($academic_sessions as $academic_session)
                                        <option value="{{$academic_session->id}}">{{$academic_session->academic_session}}</option>
                                        @endforeach
                                        @endif

                                    </select>
                                </div>

                                @endif

                                <div class="col-md-12 form-group">
                                    <label for="course_name_id">Course Type</label>
                                    <select class="form-control" name="course_name_id" id="course_name_id" >
                                        @if(isset($courses))
                                            <option value="{{$user->course_name_id}}">{{$user->CourseName->course_name}}</option>
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
                                            <option value="{{$user->faculty_id}}">{{$user->Faculty->name}}</option>
                                            @foreach($faculties as $faculty)
                                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="profile_image">Notice Image</label>
                                    <br>
                                    <td><a href="{{url('/uploads/'.$user->profile_image)}}">

                                          <img src="{{url('/uploads/'.$user->profile_image)}}" alt="" width="150px" height="100px" style="{margin-bottom:10px;}">


                                        </a>
                                    </td>
                                    <br>
                                    <input type="file" name="profile_image" value="{{old('profile_image')}}" id="notice_image" >
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Update" class="btn btn-success btn-lg btn-block">
                                </div>
                            </div>





                        </div>

                    </form>

                    <div class="clearfix"></div>



                </div>


            </div>

        </section>
        <!-- /wrapper -->
    </section>
@endsection
