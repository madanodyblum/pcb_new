    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">
    
        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
    
        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <?php $routeName = Request::route()->getName();$user_role = \App\User::get_user_role()?>
                        
                            @if($user_role == 'admin')
                        <li class="@if (Request::is('admin/dashboard')) nav-active @endif">
                                <a href="{{route('admin.dashboard')}}">
                            @else
                        <li class="@if (Request::is('dashboard')) nav-active @endif">
                                <a href="{{route('user.dashboard')}}">
                            @endif  
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                       
                         @if($user_role == 'admin')
                         <li class="@if (Request::is('admin/job')) nav-active @endif">
                            <a href="{{route('admin.job_manage')}}">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span>Job Manage</span>
                            </a>
                        </li>

                        <li class="@if (Request::is('admin/panelmanage')) nav-active @endif">
                            <a href="{{ route('admin.panelmanage') }}">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <span>Panel Manage</span>
                            </a>
                        </li>
                         @endif
                       <li class="nav-parent @if (Request::is('job/*')) nav-expanded nav-active @endif">
                            <a>
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                                <span>Job</span>
                            </a>
                             <ul class="nav nav-children">
                                <li>
                                    <a href="{{route('job.add')}}">
                                         Add New Job
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('job.status')}}">
                                         Job Status
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('job.upload')}}">
                                         Upload Gerber
                                    </a>
                                </li>
                            </ul>                                    
                        </li>
                         @if($user_role == 'admin')
                         <li class="@if (Request::is('admin/usermanage')) nav-active @endif">
                            <a href="{{route('admin.usermanage')}}">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>User Manage</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
             
                
                <hr class="separator" />
      <!-- 
                <div class="sidebar-widget widget-stats">
                    <div class="widget-header">
                        <h6>Company Stats</h6>
                        <div class="widget-toggle">+</div>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li>
                                <span class="stats-title">Stat 1</span>
                                <span class="stats-complete">85%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                        <span class="sr-only">85% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="stats-title">Stat 2</span>
                                <span class="stats-complete">70%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="stats-title">Stat 3</span>
                                <span class="stats-complete">2%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                        <span class="sr-only">2% Complete</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
    
        </div>
    
    </aside>
    <!-- end: sidebar -->

