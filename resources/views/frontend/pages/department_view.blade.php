@extends('frontend.master')
@section('pages')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0 department-title">{{$department->dept_full_name}}</h2>

            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current" style="text-transform: uppercase;">{{$department->name}}</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="department-menu">
           

                <nav class="navbar navbar-expand-lg navbar-light  menu-bg">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#" style="text-transform: uppercase;">{{$department->name}} </a>
                    </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#">Teacher</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Student
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @foreach($academic_sessions as $academic_session)
                        <a class="dropdown-item" href="{{route('department-students',[$department->id,$academic_session->id])}}">{{$academic_session->academic_session}}</a>
                        @endforeach
                       </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Others</a>
                    </li>
                  </ul>
                  
                </div>
              </nav>
            </div>
            
          </div>
            <div class="row justify-content-center">

              <div class="col-md-4">
                    <h2 class="recent-header">Recent Notices</h2>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Academic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact " aria-selected="false">Event</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                @foreach($academic_notices as $academic_notice)
                                    <li class="recent-notice-list">
                                        <a href="{{route('SingleNoticeView',$academic_notice->id)}}" class="notice-link">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            {{$academic_notice->title}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul>
                                @foreach($admission_notices as $admission_notice)
                                    <li class="recent-notice-list">
                                        <a href="{{route('SingleNoticeView',$admission_notice->id)}}" class="notice-link">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            {{$admission_notice->title}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <ul>
                                @foreach($event_notices as $event_notice)
                                    <li class="recent-notice-list">
                                        <a href="{{route('SingleNoticeView',$event_notice->id)}}" class="notice-link">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            {{$event_notice->title}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 mb-4">
                    <p class="mb-5">
                        <img src="{{url('/uploads/'.$department->dept_image)}}" alt="Image" class="img-fluid">
                    </p>
                    <p>{{$department->description}}</p>
                </div>

            </div>
        </div>
    </div>

{{--    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">--}}
{{--        <div class="container">--}}
{{--          <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">--}}
{{--              <span class="icon flaticon-mortarboard"></span>--}}
{{--              <h3>Our Philosphy</h3>--}}
{{--              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">--}}
{{--              <span class="icon flaticon-school-material"></span>--}}
{{--              <h3>Academics Principle</h3>--}}
{{--              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?--}}
{{--                Dolore, amet reprehenderit.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">--}}
{{--              <span class="icon flaticon-library"></span>--}}
{{--              <h3>Key of Success</h3>--}}
{{--              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?--}}
{{--                Dolore, amet reprehenderit.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
      @endsection
