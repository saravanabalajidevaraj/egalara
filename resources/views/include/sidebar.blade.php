<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{route('dashboard')}}">
            <div class="logo-img">
               <img height="50" src="{{ asset('img/LSShead.jpg')}}" class="header-brand-img" title="ega Security"> 
            </div>
        </a>
         
      
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp
    
    <div class="sidebar-content">
        <div class="nav-container">
            <h3 style="color: #fff;
    background: #050519;
    text-align: center;
    padding: 10px;">{{Auth::user()->name}}</h3>
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ ($segment1 == 'dashboard') ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Dashboard')}}</span></a>
                </div>




             <nav id="main-menu-navigation" class="navigation-main">
                
                <div class="nav-item {{ ($segment1 == 'achievements' || $segment1 == 'gradstatus'||$segment1 == 'permission' ||$segment1 == 'orgchart' || $segment1 == 'app' || $segment1 == 'organization')  ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>{{ __('organization')}}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        @can('manage_user')
                         <a href="{{url('organization')}}" class="menu-item {{ ($segment1 == 'organization' ) ? 'active' : '' }}">{{ __('Overview')}}</a>

                        <a href="{{url('achievements')}}" class="menu-item {{ ($segment1 == 'achievements' ) ? 'active' : '' }}">{{ __('Achievements')}}</a>
                       

                        <a href="{{url('app')}}" class="menu-item {{ ($segment1 == 'app' ) ? 'active' : '' }}">{{ __('Appreciation letters')}}</a>
<a href="{{url('gradstatus')}}" class="menu-item {{ ($segment1 == 'gradstatus') ? 'active' : '' }}">{{ __('grading status')}}</a>

                        <a href="{{url('orgchart')}}" class="menu-item {{ ($segment1 == 'orgchart' ) ? 'active' : '' }}">{{ __('organization chart')}}</a>

                         @endcan
                         <!-- only those have manage_role permission will get access -->
                       <!--  @can('manage_roles')
                        <a href="{{url('roles')}}" class="menu-item {{ ($segment1 == 'roles') ? 'active' : '' }}">{{ __('grading status')}}</a>
                        @endcan -->
                        <!-- only those have manage_permission permission will get access -->
                      <!--   @can('manage_permission')
                        <a href="{{url('permission')}}" class="menu-item {{ ($segment1 == 'permission') ? 'active' : '' }}">{{ __('Permission')}}</a>
                        @endcan -->
                    </div>
                </div>
            </nav>



              <div class="nav-item {{ ($segment1 == 'users' || $segment1 == 'dashboard'||$segment1 == 'permission' ||$segment1 == 'user') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>{{ __('Employee Management')}}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        @can('manage_user')
                         <a href="{{url('users')}}" class="menu-item {{ ($segment1 == 'users') ? 'active' : '' }}">{{ __('All Employees')}}</a>
                        <a href="{{url('user/create')}}" class="menu-item {{ ($segment1 == 'user' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Add employee')}}</a>
                         @endcan
                         <!-- only those have manage_role permission will get access -->
                        @can('manage_roles')
                        <a href="{{url('dashboard')}}" class="menu-item {{ ($segment1 == 'dashboard') ? 'active' : '' }}">{{ __('Employee dashboard')}}</a>
                        @endcan
                        <!-- only those have manage_permission permission will get access -->
                      <!--   @can('manage_permission')
                        <a href="{{url('permission')}}" class="menu-item {{ ($segment1 == 'permission') ? 'active' : '' }}">{{ __('Permission')}}</a>
                        @endcan -->
                    </div>
                </div>


                <div class="nav-item {{ ($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>{{ __('User Management')}}</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                       <!--  @can('manage_user')
                       
                        <a href="{{url('user/create')}}" class="menu-item {{ ($segment1 == 'user' && $segment2 == 'create') ? 'active' : '' }}">{{ __('Add User')}}</a>
                         @endcan -->
                         <!-- only those have manage_role permission will get access -->
                        @can('manage_roles')
                        <a href="{{url('roles')}}" class="menu-item {{ ($segment1 == 'roles') ? 'active' : '' }}">{{ __('Roles')}}</a>
                        @endcan
                        <!-- only those have manage_permission permission will get access -->
                        @can('manage_permission')
                        <a href="{{url('permission')}}" class="menu-item {{ ($segment1 == 'permission') ? 'active' : '' }}">{{ __('Permission')}}</a>
                        @endcan
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>