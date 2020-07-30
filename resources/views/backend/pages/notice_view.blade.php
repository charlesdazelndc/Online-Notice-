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



                                <div class="col-md-12 form-group">
                                    <label for="department_id">Department</label>
                                    <input type="text" name="department_id" id="department_id" value="{{$notice->department_name}}" class="form-control form-control-lg">
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="academic_session_id">session</label>
                                    <input type="text" name="academic_session_id" id="academic_session_id" value="{{$notice->academic_session}}" class="form-control form-control-lg">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="course_name_id">Course Type</label>
                                    <input type="text" name="course_name_id" id="course_name_id" value="{{$notice->course_name}}" class="form-control form-control-lg">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="faculty_id">Faculty</label>
                                    <input type="text" name="course_name_id" id="course_name_id" value="{{$notice->faculty_name}}" class="form-control form-control-lg">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="notice_type_id">Notice Type</label>
                                    <input type="text" name="notice_type_id" id="notice_type_id" value="{{$notice->notice_type_name}}" class="form-control form-control-lg">
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
                                    <input type="text" name="status" value="{{$notice->status==1?'Published':'Unpublished'}}" id="notice_date" class="form-control form-control-lg">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="notice_image">Notice Image</label>
                                    <br>
                                    <td>  <embed
                                            src="{{url('/uploads/'.$notice->notice_image)}}"
                                            style="width:600px; height:500px;"
                                            frameborder="0"></td>
                                    <br>

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
