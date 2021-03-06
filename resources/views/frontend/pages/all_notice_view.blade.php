@extends('frontend.master')
@section('pages')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">All Notices</h2>

            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{route('homepage')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Notice</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h2 class="recent-header">Recent Notices</h2>
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
