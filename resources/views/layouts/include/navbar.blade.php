<header class="header">
    <div class="logo-container">
        <a href="/" class="logo">
            <img src="{{asset('assets/images/logo.png')}}" height="35" alt="JSOFT Admin" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">
 
        <div id="userbox" class="userbox">
        	@guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{asset('assets/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{asset('assets/images/!logged-user.jpg')}}" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                    <h4><span class="name">{{ Auth::user()->name }}</span></h4>
                    <!-- <span class="role">administrator</span> -->
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <!-- <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a> -->
                    </li>
                   <!--  <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                    </li> -->
                    <li>
                        <a  role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endguest
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header