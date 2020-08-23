 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          @if(auth()->user()->role_id == 1)
            <li class="mt">
                <a href="" class="active_nav"><i class="fa fa-user"></i><span>Users</span></a>
                <ul class="sub">
                    <li><a href="{{route('UserList')}}">All Users</a></li>
                    @foreach($roles as $role)
                    <li><a href="{{route('admin-list',$role->id)}}">{{$role->role_name}}</a></li>
                    @endforeach
                    
                </ul>
            </li>
            @endif
            @if(auth()->user()->role_id == 1)
            <li class="mt">
              <a href="" class="active_nav"><i class="fa fa-dashboard "></i><span>Notices Types</span></a>
              <ul class="sub">
                      <li><a href="{{route('deshboard')}}">All Notice</a></li>
                      @foreach($notice_types as $notice_type)
                      <li><a href="{{route('notice-list',$notice_type->id)}}">{{$notice_type->notice_type_name}}</a></li>
                      @endforeach
                      
                  </ul>
            </li>
            @endif
 @if(auth()->user()->role_id == 1)
          <li class="sub-menu">
              <a href=""><i class="fa fa-desktop"></i><span>Departments</span></a>
            <ul class="sub">
              <li><a href="{{route('ViewDepartment')}}">Add Department</a></li>
              
            </ul>
          </li>

  @endif



   @if(auth()->user()->role_id == 3)
    <li class="mt"> <a href="{{route('teacherDeshboard')}}" class="active_nav"><i class="fa fa-dashboard "></i><span>All Notice</span></a></li>
            <li class="mt">
             
              

              <a href="" class="active_nav"><i class="fa fa-bars"></i><span>Types of Notice</span></a>
              <ul class="sub">
                      
                      @foreach($notice_types as $notice_type)
                      <li><a href="{{route('teacher.notice-list-type',$notice_type->id)}}">{{$notice_type->notice_type_name}}</a></li>
                      @endforeach
                      
                  </ul>
            </li>

             <li class="mt">
              <a href="" class="active_nav"><i class="fa fa-building"></i><span>Departments Notice</span></a>
              <ul class="sub">
                      
                      @foreach($departments as $department)
                      <li><a href="{{route('teacher.notice-list-department',$department->id)}}">{{$department->name}}</a></li>
                      @endforeach
                      
                  </ul>
            </li>

             <li class="mt">
              <a href="" class="active_nav"><i class="fa fa-address-book"></i><span>Student Notice</span></a>
              <ul class="sub">
                      
                      @foreach($academic_sessions as $academic_session)
                      <li><a href="{{route('teacher.notice-list-session',$academic_session->id)}}">{{$academic_session->academic_session}}</a></li>
                      @endforeach
                      
                  </ul>
            </li>
            @endif
         </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
