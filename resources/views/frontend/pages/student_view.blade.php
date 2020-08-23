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
            @foreach($students as $student)
            <div class="col-md-3">
              <div class="student-info">
                <img src="{{url('/uploads/'.$student->profile_image)}}" alt="" class="img-fluid">
                <h4><span class="bold-info">Name:</span>{{$student->full_name}}</h4>
                <h4><span class="bold-info">Dept :</span>{{$student->department_name}}</h4>
                <h4><span class="bold-info">Session:</span>{{$student->academic_session}}</h4>
              </div>
            </div>
            @endforeach
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
