@extends('backend.master')
@section('pages')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="container-fluid">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-sm-4">


                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif



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
                            <h5 class="card-title">Users</h5>
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordered table-striped">
                                    <thead>
                                    <th>Si</th>
                                    <th>Name</th>
                                    <th>Dept Full Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    </thead>

                                    <tbody>
                                    @if(isset($departments))
                                        @php
                                            $i=0;
                                        @endphp
                                        @foreach($departments as $department)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$department->name}}</td>
                                                <td>{{$department->dept_full_name}}</td>
                                                <td>{{$department->description}}</td>
                                                <td><img src="{{ url('/uploads/' . $department->dept_image) }}" alt="" width="50px" height="50px"></td>

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

                                <form action="{{route('AddDepartment')}}"  method="post" enctype="multipart/form-data">@csrf





                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="dept_full_name">Dept Full Name</label>
                                                <input type="text" id="dept_full_name" name="dept_full_name" value="{{old('dept_full_name')}}" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>
                                   
                                     <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label for="faculty_id">Faculty</label>
                                            <select class="form-control" name="faculty_id" id="faculty_id" >
                                                @if(isset($faculties))
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
                                                <label for="description">Description</label>
                                                <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                    </div>







                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="dept_image">Dept Image</label>
                                                <input type="file"  name="dept_image"  id="dept_image" >
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
