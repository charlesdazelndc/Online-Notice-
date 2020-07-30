@extends('backend.master')
@section('pages')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="container-fluid">


                <div class="row">



                    <form action="" method="post" enctype="multipart/form-data">@csrf
                        <div class="row">


                            <div class="col-md-6">



                                    <div class="col-md-12 form-group">
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
                                        <input type="text" id="role_id" name="role_id" value=" " class="form-control form-control-lg">
                                    </div>

                                    <div class="col-md-12 form-group">
                                    <label for="department">Department</label>
                                        <input type="text" id="department" name="department" value="{{$user->department_name}}" class="form-control form-control-lg">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="academic_session_id">session</label>
                                    <input class="form-control" value="{{$user->academic_session}}"  name="academic_session_id" id="academic_session_id" >

                                </div>



                                <div class="col-md-12 form-group">
                                    <label for="course_name_id">Course Type</label>
                                    <input class="form-control" value="{{$user->course_name}}" name="course_name_id" id="course_name_id" >
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="faculty_id">Faculty</label>
                                    <input class="form-control" value="{{$user->faculty_name}}" name="faculty_id" id="faculty_id" >
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="profile_image">Profile Image</label>
                                    <br>
                                    <td><a href="{{url('/uploads/'.$user->profile_image)}}"><img src="{{url('/uploads/'.$user->profile_image)}}" alt="" width="150px" height="100px" style="{margin-bottom:10px;}"></a></td>
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
