 @extends('frontend.master')
 @section('pages')

  <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('{{asset('frontend')}}/images/slider_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Mawlana Bhasani Science and Technology University</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('{{asset('frontend')}}/images/slider_2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>You Can Learn Anything</h1>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Notice</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 ">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Recent Notices</h2>
                  <ul>
                      @foreach($recent_notices as $recent_notice)
                      <li class="recent-notice-list">
                          <a href="{{route('SingleNoticeView',$recent_notice->id)}}" class="notice-link">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                             {{$recent_notice->title}}
                          </a>
                      </li>
                      @endforeach

                  </ul>

              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 ">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Academic Notices</h2>
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
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 ">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Admission Notice</h2>
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
            </div>
          </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="feature-1 ">
                    <div class="icon-wrapper bg-primary">
                        <span class="flaticon-library text-white"></span>
                    </div>
                    <div class="feature-1-content">
                        <h2>Event Notice</h2>
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


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3" style="text-transform: uppercase;">
              <span>Departments</span>
            </h2>

          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                  @foreach($departments as $department )
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="{{route('frontend.ViewDepartment',$department->id)}}"><img src="{{url('/uploads/'.$department->dept_image)}}" alt="Image"class="img-fluid dept_image"></a>
{{--                      <div class="price">$99.00</div>--}}
{{--                      <div class="category"><h3>Computer Science And Engineering</h3></div>--}}
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2 style="text-transform: uppercase">{{$department->dept_full_name}}</h2>

                      <p class="desc mb-4"> {{Str::words($department->description,30)}}</p>
                      <p><a href="{{route('frontend.ViewDepartment',$department->id)}}" class="btn btn-primary rounded-0 px-4">Read More</a></p>
                    </div>
                  </div>
                  @endforeach
              </div>

          </div>
        </div>



      </div>
    </div>




    <div class="section-bg style-1" style="background-image: url('{{asset('frontend')}}/images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About Our University</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">{{Str::words($about->about_description,80)}}</p>
            <p><a href="{{route('frontend.ViewAbout')}}">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->


    <div class="news-updates">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
             <div class="section-heading">
              <h2 class="text-black">News &amp; Event</h2>
              <a href="#">Read All News</a>
            </div>

            <div class="row">

              <div class="col-lg-6">
                  @foreach($events as $event)
                <div class="post-entry-big  horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link"><img src="{{url('/uploads/'.$event->notice_image)}}" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">{{ Carbon\Carbon::parse($event->notice_date)->format('d-M-Y') }}</a>
                      <span class="mx-1">/</span>
                      <a href="#">{{$event->notice_type_name}}</a></a>
                    </div>
                    <h3 class="post-heading"><a href="{{route('SingleNoticeView',$event->id)}}">{{$event->title}}</a></h3>
                  </div>
                </div>
                  @endforeach
              </div>
              <div class="col-lg-6">
                  @foreach($news as $new)
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img src="{{url('/uploads/'.$new->notice_image)}}" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                        <a href="#">{{ Carbon\Carbon::parse($new->notice_date)->format('d-M-Y') }}</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="{{route('SingleNoticeView',$new->id)}}">{{$new->title}}</a></h3>
                  </div>
                </div>

                  @endforeach
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>


    @endsection
