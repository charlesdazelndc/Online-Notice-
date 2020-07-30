@extends('backend.master')
@section('pages')
<section id="main-content">
      <section class="wrapper">
        <!-- page start-->

        <div class="container-fluid">
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
                        <h5 class="card-title">Notices</h5>
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordered table-striped">
                                <thead>
                                <th>Si</th>
                                <th>Title</th>
                                <th>Description</th>

                                <th>Session</th>
                                <th>Department</th>
                                <th>Course Type</th>
                                <th>Faculty</th>
                                <th>Notice Type</th>
                                <th>Notice Date</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Notice File</th>
                                <th>Status</th>
                                <th>Actions</th>


                                </thead>

                                <tbody>
                                  @if(isset($academic_notices))
                                      @php
                                      $i=1;
                                      @endphp
                                      @foreach($academic_notices as $academic_notice)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$academic_notice->title}}</td>
                                        <td>{{$academic_notice->description}}</td>

                                        <td>{{$academic_notice->academic_session}}</td>
                                        <td>{{$academic_notice->department_name}}</td>
                                        <td>{{$academic_notice->course_name}}</td>
                                        <td>{{$academic_notice->faculty_name}}</td>
                                        <td>{{$academic_notice->notice_type_name}}</td>
                                        <td>{{$academic_notice->notice_date}}</td>
                                        <td>{{$academic_notice->start_date}}</td>
                                        <td>{{$academic_notice->end_date}}</td>
                                        <td>

                                            <embed
                                            src="{{url('/uploads/'.$academic_notice->notice_image)}}"
                                            style="width:100px; height:100px;"
                                            frameborder="0">

                                        </td>
                                        @if($academic_notice->status==1)
                                            <td ><a href="{{route('StatusInactive',$academic_notice->id)}}" class="btn-success" style="padding: 5px;"><i class="fa fa-check"></i></a></td>
                                        @else
                                            <td><a href="{{route('StatusActive',$academic_notice->id)}}" class="btn-danger" style="padding: 5px;"><i class="fa fa-times" ></i></a></td>
                                        @endif

                                         <td class="action-icon">
                                             <a class="action-link btn-success" title="edit" href="{{route('NoticeEdit',$academic_notice->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                             <a class="action-link btn-facebook" title="view" href="{{route('NoticeView',$academic_notice->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                             <a class="action-link btn-danger" title="delete" href="{{route('NoticeDelete',$academic_notice->id)}}"> <i class="fa fa-trash" aria-hidden="true"></i></a>

                                         </td>

                                    </tr>
                                      @endforeach

                                   @endif
                                </tbody>

                            </table>
                            {{ $academic_notices->links() }}
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

                    <form action="{{route('addnotice')}}"  method="post" enctype="multipart/form-data">@csrf



                     <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select class="form-control" name="department_id" id="department_id" >
                                        @if(isset($departments))
                                            <option value="">Select Session</option>
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
                                            <option value="">Select Session</option>
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
                                    <select class="form-control" name="course_name_id" id="course_name_id" value="Select Course" >
                                        @if(isset($courses))
                                            <option value="">Select Session</option>
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
                                            <option value="">Select Session</option>
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
                                    <label for="faculty_id">Notice Type</label>
                                    <select class="form-control" name="notice_type_id" id="faculty_id" >
                                        @if(isset($notice_types))
                                            <option value="">Select Session</option>
                                            @foreach($notice_types as $notice_type)
                                                <option value="{{$notice_type->id}}">{{$notice_type->notice_type_name}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                            </div>
                        </div>


                           <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title"  placeholder="write title" id="title" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="notice_date">Notice Date</label>
                                    <input type="date" class="form-control" name="notice_date"  placeholder="write title" id="notice_date" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="start_date">start Date</label>
                                    <input type="date" class="form-control" name="start_date"  placeholder="write title" id="start_date" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="date" class="form-control" name="end_date"  placeholder="write title" id="end_date" >
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="notice_image">Notice File</label>
                                    <input type="file"  name="notice_image"  id="notice_image" >
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
