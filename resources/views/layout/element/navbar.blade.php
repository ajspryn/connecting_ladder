<!-- header start -->
    <header>
        <div class="mobile-fix-menu"></div>
        <div class="container-fluid custom-padding">
            <div class="header-section">
                <div class="header-left">
                    <div class="brand-logo">
                        <a href="/">
                            <img src="{{ url('/') }}/assets/images/icon/logo.png" alt="logo" class="img-fluid blur-up lazyload">
                        </a>
                    </div>
                    <ul class="btn-group">
                        <li class="header-btn home-btn">
                            <a class="main-link" href="/">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="home"></i>
                            </a>
                        </li>
                        <li class="header-btn custom-dropdown dropdown-lg add-friend">
                            <a class="main-link" href="/index/volunteer">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="users"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul class="option-list">
                        <li class="header-btn custom-dropdown">
                            <a id="dark" class="main-link" href="javascript:void(0)">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="moon"></i>
                            </a>
                            <a id="light" class="main-link d-none" href="javascript:void(0)">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="sun"></i>
                            </a>
                        </li>
                        <li class="header-btn custom-dropdown d-md-none d-block app-btn">
                            <a class="main-link" href="javascript:void(0)">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="grid"></i>
                            </a>
                            <div class="overlay-bg app-overlay"></div>
                            <div class="app-box">
                                <h1>Maaf Ya Fitur Ini Lagi Dikembangin</h1>
                                {{-- <div class="row">
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="index.html">
                                                <div class="icon">
                                                    <i data-feather="file" class="bar-icon"></i>
                                                </div>
                                                <h5>Newsfeed</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="single-page.html">
                                                <div class="icon">
                                                    <i data-feather="star" class="bar-icon"></i>
                                                </div>
                                                <h5>favourite</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="#">
                                                <div class="icon">
                                                    <i data-feather="users" class="bar-icon"></i>
                                                </div>
                                                <h5>group</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="music.html">
                                                <div class="icon">
                                                    <i data-feather="headphones" class="bar-icon"></i>
                                                </div>
                                                <h5>music</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="weather.html">
                                                <div class="icon">
                                                    <i data-feather="cloud" class="bar-icon"></i>
                                                </div>
                                                <h5>weather</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="event.html">
                                                <div class="icon">
                                                    <i data-feather="calendar" class="bar-icon"></i>
                                                </div>
                                                <h5>calender</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="#">
                                                <div class="icon">
                                                    <svg class="bar-icon">
                                                        <use class="fill-color"
                                                            xlink:href="../assets/svg/icons.svg#cake"></use>
                                                    </svg>
                                                </div>
                                                <h5>event</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="app-icon">
                                            <a href="games.html">
                                                <div class="icon">
                                                    <svg class="bar-icon">
                                                        <use class="fill-color"
                                                            xlink:href="../assets/svg/icons.svg#game-controller">
                                                        </use>
                                                    </svg>
                                                </div>
                                                <h5>games</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </li>
                        <li class="header-btn custom-dropdown dropdown-lg btn-group notification-btn">
                            <a class="main-link" href="/index/forum">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="file-text"></i>
                            </a>
                        </li>
                        <li class="header-btn custom-dropdown dropdown-lg btn-group message-btn">
                            <a class="main-link" href="/index/universitas">
                                <i class="icon-light stroke-width-3 iw-16 ih-16" data-feather="command"></i>
                            </a>
                        </li>
                        @auth
                            @if (Auth::user()->role==0)
                                <li class="header-btn custom-dropdown profile-btn btn-group">
                                    <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"
                                            data-feather="user"></i>
                                        <div class="media d-none d-sm-flex">
                                            <div class="user-img">
                                                @if (Auth::user()->photo)
                                                <img src="{{ asset('storage/'.Auth::user()->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                @else
                                                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                @endif
                                                <span class="available-stats online"></span>
                                            </div>
                                            <div class="media-body d-none d-md-block">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <span>{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header">
                                            <span>profile</span>
                                            <div class="mobile-close">
                                                <h5>close</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-content">
                                            <ul class="friend-list">
                                                {{-- <li>
                                                    <a href="profile.html">
                                                        <div class="media">
                                                            <i data-feather="user"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">Profile</h5>
                                                                    <h6>Profile preview & settings</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="settings.html">
                                                        <div class="media">
                                                            <i data-feather="settings"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">setting & privacy</h5>
                                                                    <h6>all settings & privacy</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="help-support.html">
                                                        <div class="media">
                                                            <i data-feather="help-circle"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">help & support</h5>
                                                                    <h6>browse help here</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> --}}
                                                <li>
                                                    <a href="logout">
                                                        <div class="media">
                                                            <i data-feather="log-out"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">log out</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @elseif (Auth::user()->role==1)
                                <li class="header-btn custom-dropdown profile-btn btn-group">
                                    <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"
                                            data-feather="user"></i>
                                        <div class="media d-none d-sm-flex">
                                            <div class="user-img">
                                                @if (Auth::user()->photo)
                                                <img src="{{ asset('storage/'.Auth::user()->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                @else
                                                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                @endif
                                                <span class="available-stats online"></span>
                                            </div>
                                            <div class="media-body d-none d-md-block">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <span>{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header">
                                            <span>profile</span>
                                            <div class="mobile-close">
                                                <h5>close</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-content">
                                            <ul class="friend-list">
                                                {{-- <li>
                                                    <a href="profile.html">
                                                        <div class="media">
                                                            <i data-feather="user"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">Profile</h5>
                                                                    <h6>Profile preview & settings</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="settings.html">
                                                        <div class="media">
                                                            <i data-feather="settings"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">setting & privacy</h5>
                                                                    <h6>all settings & privacy</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="help-support.html">
                                                        <div class="media">
                                                            <i data-feather="help-circle"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">help & support</h5>
                                                                    <h6>browse help here</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> --}}
                                                <li>
                                                    <a href="logout">
                                                        <div class="media">
                                                            <i data-feather="log-out"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">log out</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @elseif (Auth::user()->role==2)
                                <li class="header-btn custom-dropdown profile-btn btn-group">
                                    <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"
                                            data-feather="user"></i>
                                        <div class="media d-none d-sm-flex">
                                            <div class="user-img">
                                                @if (Auth::user()->photo)
                                                <img src="{{ asset('storage/'.Auth::user()->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                @else
                                                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                @endif
                                                <span class="available-stats online"></span>
                                            </div>
                                            <div class="media-body d-none d-md-block">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <span>{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header">
                                            <span>profile</span>
                                            <div class="mobile-close">
                                                <h5>close</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-content">
                                            <ul class="friend-list">
                                                {{-- <li>
                                                    <a href="profile.html">
                                                        <div class="media">
                                                            <i data-feather="user"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">Profile</h5>
                                                                    <h6>Profile preview & settings</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="settings.html">
                                                        <div class="media">
                                                            <i data-feather="settings"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">setting & privacy</h5>
                                                                    <h6>all settings & privacy</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="help-support.html">
                                                        <div class="media">
                                                            <i data-feather="help-circle"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">help & support</h5>
                                                                    <h6>browse help here</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> --}}
                                                <li>
                                                    <a href="logout">
                                                        <div class="media">
                                                            <i data-feather="log-out"></i>
                                                            <div class="media-body">
                                                                <div>
                                                                    <h5 class="mt-0">log out</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                        @endauth
                        @else
                            <li class="header-btn custom-dropdown profile-btn btn-group">
                                <a class="main-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-light stroke-width-3 d-sm-none d-block iw-16 ih-16"
                                        data-feather="user"></i>
                                    <div class="media d-none d-sm-flex">
                                        <div class="media-body d-none d-md-block">
                                            <h4>Kamu Belum Login</h4>
                                            <span>Ayo login dulu</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header">
                                        <span>profile</span>
                                        <div class="mobile-close">
                                            <h5>close</h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="friend-list">
                                            <li>
                                                <a href="{{ url('/') }}/login">
                                                    <div class="media">
                                                        <i data-feather="log-in"></i>
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">login</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/') }}/register">
                                                    <div class="media">
                                                        <i data-feather="user-plus"></i>
                                                        <div class="media-body">
                                                            <div>
                                                                <h5 class="mt-0">Register</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
