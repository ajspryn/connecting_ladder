<!-- sidebar panel start -->
<div class="sidebar-panel panel-lg sidebar-light">
    @auth
    @if (Auth::user()->role==0)
    <div class="user-wrap">
        <div class="profile-img">
            <div>
                @if (Auth::user()->photo)
                <img src="{{ asset('storage/'.Auth::user()->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="profile">
                @else
                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="profile">
                @endif
                {{-- <img src="{{ url('/') }}/assets/images/story/8.jpg" class="img-fluid blur-up lazyload bg-img" alt="profile"> --}}
            </div>
            <span class="stats">
                <img src="{{ url('/') }}/assets/images/icon/verified.png" class="img-fluid blur-up lazyload" alt="verified">
            </span>
        </div>
        <div class="user-info">
            <h3>{{ Auth::user()->name }}</h3>
            <h4>{{ Auth::user()->email }}</h4>
        </div>
    </div>
    <ul class="sidebar-icon">
        <li class={{ Request::is('/')? "active":"" }}>
            <a href="/">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/star.svg" class="bar-icon-img" alt="news">
                <h4>Feed</h4>
            </a>
        </li>
        <li class={{ Request::is('forum')? "active":"" }}>
            <a href="/forum">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/news.svg" class="bar-icon-img" alt="favourite">
                <h4>Forum</h4>
            </a>
        </li>
        <li class={{ Request::is('universitas')? "active":"" }}>
            <a href="/universitas">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/menu.svg" class="bar-icon-img" alt="group">
                <h4>Universitas</h4>
            </a>
        </li>
        <li class={{ Request::is('volunteer')? "active":"" }}>
            <a href="/volunteer">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/friends.svg" class="bar-icon-img" alt="group">
                <h4>Volunteer</h4>
            </a>
        </li>
    </ul>
    @elseif (Auth::user()->role==1)
    <div class="user-wrap">
        <div class="profile-img">
            <div>
                @if (Auth::user()->photo)
                <img src="{{ asset('storage/'.Auth::user()->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="profile">
                @else
                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="profile">
                @endif
                {{-- <img src="{{ url('/') }}/assets/images/story/8.jpg" class="img-fluid blur-up lazyload bg-img" alt="profile"> --}}
            </div>
            <span class="stats">
                <img src="{{ url('/') }}/assets/images/icon/verified.png" class="img-fluid blur-up lazyload" alt="verified">
            </span>
        </div>
        <div class="user-info">
            <h3>{{ Auth::user()->name }}</h3>
            <h4>Volunteer</h4>
        </div>
    </div>
    <ul class="sidebar-icon">
        <li class={{ Request::is('/')? "active":"" }}>
            <a href="/">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/star.svg" class="bar-icon-img" alt="news">
                <h4>Feed</h4>
            </a>
        </li>
        <li class={{ Request::is('forum')? "active":"" }}>
            <a href="/forum">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/news.svg" class="bar-icon-img" alt="favourite">
                <h4>Forum</h4>
            </a>
        </li>
        <li class={{ Request::is('universitas')? "active":"" }}>
            <a href="/universitas">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/menu.svg" class="bar-icon-img" alt="group">
                <h4>Universitas</h4>
            </a>
        </li>
    </ul>
    @elseif (Auth::user()->role==2)
    <div class="user-wrap">
        <div class="profile-img">
            <div>
                @if (Auth::user()->photo)
                <img src="{{ asset('storage/'.Auth::user()->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="profile">
                @else
                <img src="{{ url('/') }}/assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="profile">
                @endif
                {{-- <img src="{{ url('/') }}/assets/images/story/8.jpg" class="img-fluid blur-up lazyload bg-img" alt="profile"> --}}
            </div>
            <span class="stats">
                <img src="{{ url('/') }}/assets/images/icon/verified.png" class="img-fluid blur-up lazyload" alt="verified">
            </span>
        </div>
        <div class="user-info">
            <h3>{{ Auth::user()->name }}</h3>
            <h4>Admin</h4>
        </div>
    </div>
    <ul class="sidebar-icon">
        <li class={{ Request::is('/')? "active":"" }}>
            <a href="/">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/star.svg" class="bar-icon-img" alt="news">
                <h4>Feed</h4>
            </a>
        </li>
        <li class={{ Request::is('forum')? "active":"" }}>
            <a href="/forum">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/news.svg" class="bar-icon-img" alt="favourite">
                <h4>Forum</h4>
            </a>
        </li>
        <li class={{ Request::is('universitas')? "active":"" }}>
            <a href="/universitas">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/menu.svg" class="bar-icon-img" alt="group">
                <h4>Universitas</h4>
            </a>
        </li>
        <li class={{ Request::is('volunteer')? "active":"" }}>
            <a href="/volunteer">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/friends.svg" class="bar-icon-img" alt="group">
                <h4>Volunteer</h4>
            </a>
        </li>
        <li class={{ Request::is('daftar_user')? "active":"" }}>
            <a href="/daftar_user">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/group.svg" class="bar-icon-img" alt="group">
                <h4>Daftar User</h4>
            </a>
        </li>
    </ul>
    @endauth
    @else
    <div class="main-icon">
        <a href="{{ route('login') }}">
            <img src="{{ url('/') }}/assets/svg/sidebar-vector/login.svg" class="bar-icon-img" alt="logout">
            <h4>Login</h4>
        </a>
    </div>
    <ul class="sidebar-icon">
        <li class={{ Request::is('/')? "active":"" }}>
            <a href="/">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/star.svg" class="bar-icon-img" alt="news">
                <h4>Feed</h4>
            </a>
        </li>
        <li class={{ Request::is('index/forum')? "active":"" }}>
            <a href="/index/forum">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/news.svg" class="bar-icon-img" alt="favourite">
                <h4>Forum</h4>
            </a>
        </li>
        <li class={{ Request::is('index/universitas')? "active":"" }}>
            <a href="/index/universitas">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/menu.svg" class="bar-icon-img" alt="group">
                <h4>Universitas</h4>
            </a>
        </li>
        <li class={{ Request::is('index/volunteer')? "active":"" }}>
            <a href="/index/volunteer">
                <img src="{{ url('/') }}/assets/svg/sidebar-vector/friends.svg" class="bar-icon-img" alt="group">
                <h4>Volunteer</h4>
            </a>
        </li>
    </ul>
    <div class="main-icon">
        <a href="{{ route('register') }}">
            <img src="{{ url('/') }}/assets/svg/sidebar-vector/user-plus.svg" class="bar-icon-img" alt="logout">
            <h4>Register</h4>
        </a>
    </div>
    @endif
    @auth
    <div class="main-icon">
        <a href="{{ route('logout') }}">
            <img src="{{ url('/') }}/assets/svg/sidebar-vector/next.svg" class="bar-icon-img" alt="logout">
            <h4>logout</h4>
        </a>
    </div>
    @endauth
</div>
<!-- sidebar panel end -->
