 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li class="mt">
                <a href="" class="active_nav"><i class="fa fa-user"></i><span>Users</span></a>
                <ul class="sub">
                    <li><a href="{{route('UserList')}}">All Users</a></li>
                    @foreach($roles as $role)
                    <li><a href="{{route('admin-list',$role->id)}}">{{$role->role_name}}</a></li>
                    @endforeach
                    
                </ul>
            </li>
          <li class="mt">
            <a href="{{route('deshboard')}}" class="active_nav"><i class="fa fa-dashboard "></i><span>Notices</span></a>
          </li>

          <li class="sub-menu">
              <a href=""><i class="fa fa-desktop"></i><span>Add Others Feature</span></a>
            <ul class="sub">
              <li><a href="{{route('ViewDepartment')}}">Add Department</a></li>
               <li><a href="buttons.html">2nd Year Student Notice</a></li>
              <li><a href="panels.html">3rd Year Student Notice</a></li>
              <li><a href="panels.html">4th Year Student Notice</a></li>
               <li><a href="buttons.html">Master Student Notice</a></li>
            </ul>
          </li>
         </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
