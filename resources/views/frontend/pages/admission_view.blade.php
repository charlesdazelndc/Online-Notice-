@extends('frontend.master')
@section('pages')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0 department-title">Admission Notice</h2>

            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current" style="text-transform: uppercase;">Admission</span>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="addmission_desc">
          <h2>Mawlana Bhasani Science and Technology Admission Circular 2020-21</h2>
          <p>As soon as possible  university authority will publish Dhaka University Admission Test Circular 2019-20. Hope that, DU Admission Circular 2019-20 will publish on August Month. Already Dhaka University announced their Dhaka University Admission Test Routine . Dhaka University admission will start on next 13 September 2019 finished on 28 September 2019.</p>
          <ul class="add-info">
            <li class="info-content">Online Application Date Initiate: 5 August 2019</li>
            <li class="info-content">Online Application Date Finish: 27th August 2019</li>
            <li class="info-content">Admission Test Start: 13 September 2019</li>
            <li class="info-content">Admit Card Download Date Initiate </li>
            <li class="info-content">Admission Free : 450 Taka</li>
            <li class="info-content">Admit Card Download Date Finish :  You can download admit card up to 9. am on exam day in every unit.</li>
          </ul>
          </div>
        </div>
        <div class="faculties-content">
         
         
              @foreach($faculties as $faculty)
              <div class="row">
                  <div class="depat-content">
                    <h5>Faculty of {{$faculty->name}}</h5>
                   @foreach($faculty->Departments as $department)
                          <p> <i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="">  {{$department->dept_full_name}}</a></p>
                   @endforeach
                  </div>
                 
              </div>
              @endforeach
      
        </div>
        
      

      </div> 
    </div>


      @endsection
