@extends('frontend.master')
@section('pages')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0" style="margin: 38px 0;">{{$department->dept_full_name}}</h2>

            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Department</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 mb-4">
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
