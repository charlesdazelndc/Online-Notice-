
@extends('frontend.master')
@section('pages')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('{{asset('frontend')}}/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Login</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

            <form action="{{route('login')}}" method="post">@csrf
            <div class="row justify-content-center">
                
                <div class="col-md-5">
                    <div class="row">
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
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            
            </div>
            </form>
            

          
        </div>
    </div>
@endsection