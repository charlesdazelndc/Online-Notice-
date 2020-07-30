@extends('backend.master')
@section('pages')
<section id="main-content">
      <section class="wrapper">
        <!-- page start-->

        <div class="container-fluid">


          <div class="row">



                            <form action="{{route('NoticeUpdate',$notice->id)}}" method="post" enctype="multipart/form-data">@csrf
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
                                            <label for="academic_session_id">Department</label>
                                            <select class="form-control" name="department_id" id="academic_session_id" >
                                                @if(isset($departments))
                                                    <option value="{{$notice->department_id}}">{{$notice->department_name}}</option>
                                                    @foreach($departments as $department)
                                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="academic_session_id">session</label>
                                            <select class="form-control" name="academic_session_id" id="academic_session_id" >
                                                @if(isset($academic_sessions))
                                                    <option value="{{$notice->academic_session_id}}">{{$notice->academic_session}}</option>
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
                                                    <option value="{{$notice->course_name_id}}">{{$notice->course_name}}</option>
                                                    @foreach($courses as $course)

                                                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>

                                            <div class="col-md-12 form-group">
                                                <label for="notice_type_id">Notice Type</label>
                                                <select class="form-control" name="notice_type_id" id="notice_type_id" >
                                                    @if(isset($notice_types))
                                                        <option value="{{$notice->notice_type_id}}">{{$notice->notice_type_name}}</option>
                                                        @foreach($notice_types as $notice_type)
                                                            <option value="{{$notice_type->id}}">{{$notice_type->notice_type_name}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>

                                        <div class="col-md-12 form-group">
                                            <label for="faculty_id">Faculty</label>
                                            <select class="form-control" name="faculty_id" id="faculty_id" >
                                                @if(isset($faculties))
                                                    <option value="{{$notice->faculty_id}}">{{$notice->faculty_name}}</option>
                                                    @foreach($faculties as $faculty)
                                                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" value="{{$notice->title}}" class="form-control form-control-lg">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" rows="7" name="description">{{$notice->description}}</textarea>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="notice_date">Notice Date</label>
                                            <input type="text" name="notice_date" value="{{date('Y-m-d',strtotime($notice->notice_date))}}" id="notice_date" class="form-control form-control-lg">
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <label for="start_date">Start Date</label>
                                            <input type="text" name="start_date" value="{{date('Y-m-d',strtotime($notice->start_date))}}" id="start_date" class="form-control form-control-lg">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="end_date">End Date</label>
                                            <input type="text" name="end_date" value="{{date('Y-m-d',strtotime($notice->end_date))}}" id="notice_date" class="form-control form-control-lg">
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status" >
                                                @if($notice->status==1)
                                                    <option value="1">Publishes</option>
                                                @else
                                                    <option value="0">Unpublished</option>
                                                @endif
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="notice_image">Notice Image</label>
                                            <br>
                                            <td>  <embed
                                                    src="{{url('/uploads/'.$notice->notice_image)}}"
                                                    style="width:600px; height:500px;"
                                                    frameborder="0"></td>
                                            <br>
                                            <input type="file" name="notice_image" value="{{old('notice_image')}}" id="notice_image" >
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
