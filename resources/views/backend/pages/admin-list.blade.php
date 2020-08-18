@extends('backend.master')
@section('pages')
<section id="main-content">
      <section class="wrapper">
        <!-- page start-->

        <div class="container-fluid">
          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}}">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <p data-placement="top" data-toggle="tooltip" title="addAgent" class="float-right">
                    <button class="btn btn-primary btn-sm" data-title="addAgent" data-toggle="modal"
                            data-target="#edit"><span class="fa fa-plus"></span>
                    </button>
                </p>
            </div>
        </div>

          <div class="row">
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordered table-striped">
                                <thead>
                                <th>Si</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Department</th>
                                <th>Course Type</th>
                                <th>Faculty</th>
                                <th>Session</th>
                                <th>Role</th>
                                <th>Image</th>

                                <th>Action</th>





                                </thead>

                                <tbody>
                                  @if(isset($users))
                                      @php
                                      $i=0;
                                      @endphp
                                      @foreach($users as $user)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$user->full_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->telephone}}</td>
                                        <td>{{$user->department_name}}</td>
                                        <td>{{$user->academic_session}}</td>
                                        <td>{{$user->course_name}}</td>
                                        <td>{{$user->faculty_name}}</td>
                                        <td>{{$user->role_name}}</td>

                                        <td><img src="{{ url('/uploads/' . $user->profile_image) }}" alt="" width="50px" height="50px"></td>


                                         <td class="action-icon">
                                             <a class="action-link btn-success" title="edit" href="{{route('UserProfileEdit',$user->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                             <a class="action-link btn-facebook" title="view" href="{{route('UserProfileView',$user->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                             <a class="action-link btn-danger" title="delete" href="{{route('UserProfileDelete',$user->id)}}"> <i class="fa fa-trash" aria-hidden="true"></i></a>

                                         </td>

                                    </tr>
                                      @endforeach

                                   @endif
                                </tbody>

                            </table>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Todays Notice</h4>
                </div>
                <div class="modal-body">

                    <form action="{{route('register')}}"  method="post" enctype="multipart/form-data">@csrf


                      <div class="row">
                          <div class="col-sm-12">
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


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="full_name">Fullname</label>
                                    <input type="text" id="full_name" name="full_name" value="{{old('full_name')}}" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pword">Password</label>
                                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="password_confirmtion">Re-type Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="telephone">Telephone</label>
                                    <input type="text" name="telephone" value="{{old('telephone')}}" id="telephone" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="type">type</label>
                                    <select type="text" id="role_id" name="role_id" value="{{old('role_id')}}" class="form-control form-control-lg">
                                        <option value="">select type</option>
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>

                     <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select class="form-control" name="department_id" id="department_id" >
                                        @if(isset($departments))
                                            <option value="0">Select department</option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                            <label for="session">Session</label>
                                    <select class="form-control" name="academic_session_id" id="academic_session_id" >
                                        @if(isset($academic_sessions))
                                            <option value="0">Select session</option>
                                            @foreach($academic_sessions as $academic_session)

                                                <option value="{{$academic_session->id}}">{{$academic_session->academic_session}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                                </div>
                          </div>

                         <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="course_type">Course Type</label>
                                    <select class="form-control" name="course_name_id" id="course_name_id" >
                                        @if(isset($courses))
                                            <option value="0">Select Course</option>
                                            @foreach($courses as $course)

                                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                                </div>
                          </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="notice_image">profile Image</label>
                                    <input type="file"  name="profile_image"  id="profile_image" >
                                </div>
                            </div>
                        </div>




                        <button type="submit" class="uiButton btn-primary btn-sm"  id="edit_agent_resister">Save</button>

                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
        </div>

      </section>
      <!-- /wrapper -->
</section>
    @endsection
