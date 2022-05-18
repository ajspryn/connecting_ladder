@extends('layout.front.main')

@section('container')

        <div class="page-center">

            <!-- profile menu start -->
            <div class="profile-menu ms-0 me-0">
                <ul class="right-menu d-xl-flex d-none">
                    <li>
                        <form action="/daftar_user">
                        <div class="search-bar input-style icon-left search-inmenu">
                            <i class="iw-14 ih-14 icon icon-theme" data-feather="search"></i>
                            <input type="text" class="form-control" name="pencarian" value="{{ request('pencarian') }}" placeholder="Cari User...">
                            <div class="btn-section">
                                <button action="submit" class="btn btn-solid btn-md mx-auto">Cari</button>
                            </div>
                        </div>
                        <form>
                    </li>
                </ul>
            </div>
            <!-- profile menu end -->

            @if (request('pencarian'))
                @if ($users->count()>=1)
                @foreach ($users as $user)
                <!-- top games and event section start -->
                <div class="container-fluid section-b-space section-t-space px-0">
                    <div class="row">
                        <div class="col-xl-6">
                            <!-- favourite playlist -->
                            <div class="playlist-sec">
                                <div class="card-title">
                                    <h3>Top 5 games</h3>
                                    <div class="settings">
                                        <div class="setting-btn">
                                            <a href="#" class="d-flex">
                                                <i class="icon icon-theme stroke-width-3 iw-11 ih-11"
                                                    data-feather="rotate-cw"></i>
                                            </a>
                                        </div>
                                        <div class="setting-btn ms-2 setting-dropdown">
                                            <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                <a class="d-flex" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="icon-dark stroke-width-3 iw-12 ih-12" data-feather="sun"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                    <ul>
                                                        <li>
                                                            <a href=""><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="edit"></i>change city</a>
                                                        </li>
                                                        <li>
                                                            <a href=""><i class="icon-font-light iw-16 ih-16"
                                                                    data-feather="settings"></i>setting</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-sec">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="img-sec">
                                                            <img src="../assets/images/game/1.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>League of Legends</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Action</h6>
                                                </td>
                                                <td>
                                                    <h5 class="d-flex align-items-center"><i class="me-1 iw-16 ih-16"
                                                            data-feather="user"></i>2,55,415</h5>
                                                </td>
                                                <td>
                                                    <div class="favourite-btn active">
                                                        <i data-feather="heart" class="icon-dark iw-14 ih-14"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="img-sec">
                                                            <img src="../assets/images/game/2.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Minecraft</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Strategy</h6>
                                                </td>
                                                <td>
                                                    <h5 class="d-flex align-items-center"><i class="me-1 iw-16 ih-16"
                                                            data-feather="user"></i>1,55,415</h5>
                                                </td>
                                                <td>
                                                    <div class="favourite-btn">
                                                        <i data-feather="heart" class="icon-dark iw-14 ih-14"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="img-sec">
                                                            <img src="../assets/images/game/3.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Call of Duty</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Adventure</h6>
                                                </td>
                                                <td>
                                                    <h5 class="d-flex align-items-center"><i class="me-1 iw-16 ih-16"
                                                            data-feather="user"></i>2,65,465</h5>
                                                </td>
                                                <td>
                                                    <div class="favourite-btn">
                                                        <i data-feather="heart" class="icon-dark iw-14 ih-14"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="img-sec">
                                                            <img src="../assets/images/game/4.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Counter-Strike</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Simulation</h6>
                                                </td>
                                                <td>
                                                    <h5 class="d-flex align-items-center"><i class="me-1 iw-16 ih-16"
                                                            data-feather="user"></i>7,55,515</h5>
                                                </td>
                                                <td>
                                                    <div class="favourite-btn">
                                                        <i data-feather="heart" class="icon-dark iw-14 ih-14"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="img-sec">
                                                            <img src="../assets/images/game/5.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Siege</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6>Sports</h6>
                                                </td>
                                                <td>
                                                    <h5 class="d-flex align-items-center"><i class="me-1 iw-16 ih-16"
                                                            data-feather="user"></i>4,55,455</h5>
                                                </td>
                                                <td>
                                                    <div class="favourite-btn">
                                                        <i data-feather="heart" class="icon-dark iw-14 ih-14"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="event-section overflow-hidden">
                                <div class="event_category no-arrow default-space">
                                    <div>
                                        <div class="event-box ratio2_3">
                                            <div class="image-section">
                                                <img src="../assets/images/event/2.jpg"
                                                    class="img-fluid blur-up lazyload bg-img" alt="event">
                                                <div class="card-title">
                                                    <h3>live</h3>
                                                    <div class="settings">
                                                        <div class="setting-btn">
                                                            <a href="#" class="d-flex">
                                                                <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                                    data-feather="rotate-cw"></i>
                                                            </a>
                                                        </div>
                                                        <div class="setting-btn ms-2 setting-dropdown">
                                                            <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                                        data-feather="sun"></i>
                                                                </a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=""><i
                                                                                    class="icon-font-light iw-16 ih-16"
                                                                                    data-feather="edit"></i>remind
                                                                                me</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=""><i
                                                                                    class="icon-font-light iw-16 ih-16"
                                                                                    data-feather="settings"></i>setting</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                    <img src="../assets/images/icon/play.png"
                                                        class="img-fluid blur-up lazyload" alt="play">
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <h3>tournament 2021</h3>
                                                <h6>26 january 2021</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                </p>
                                                <div class="bottom-part">
                                                    <a href="#" class="event-btn">going / not going</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="event-box ratio2_3">
                                            <div class="image-section">
                                                <img src="../assets/images/event/3.jpg"
                                                    class="img-fluid blur-up lazyload bg-img" alt="event">
                                                <div class="card-title">
                                                    <h3>event</h3>
                                                    <div class="settings">
                                                        <div class="setting-btn">
                                                            <a href="#" class="d-flex">
                                                                <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                                    data-feather="rotate-cw"></i>
                                                            </a>
                                                        </div>
                                                        <div class="setting-btn ms-2 setting-dropdown">
                                                            <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                                        data-feather="sun"></i>
                                                                </a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=""><i
                                                                                    class="icon-font-light iw-16 ih-16"
                                                                                    data-feather="edit"></i>remind
                                                                                me</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=""><i
                                                                                    class="icon-font-light iw-16 ih-16"
                                                                                    data-feather="settings"></i>setting</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                    <img src="../assets/images/icon/play.png"
                                                        class="img-fluid blur-up lazyload" alt="play">
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <h3>tournament 2021</h3>
                                                <h6>26 january 2021</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                </p>
                                                <div class="bottom-part">
                                                    <a href="#" class="event-btn">share</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="event-box ratio2_3">
                                            <div class="image-section">
                                                <img src="../assets/images/event/1.jpg"
                                                    class="img-fluid blur-up lazyload bg-img" alt="event">
                                                <div class="card-title">
                                                    <h3>event</h3>
                                                    <div class="settings">
                                                        <div class="setting-btn">
                                                            <a href="#" class="d-flex">
                                                                <i class="icon icon-dark stroke-width-3 iw-11 ih-11"
                                                                    data-feather="rotate-cw"></i>
                                                            </a>
                                                        </div>
                                                        <div class="setting-btn ms-2 setting-dropdown">
                                                            <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="icon-dark stroke-width-3 icon iw-11 ih-11"
                                                                        data-feather="sun"></i>
                                                                </a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                                    <ul>
                                                                        <li>
                                                                            <a href=""><i
                                                                                    class="icon-font-light iw-16 ih-16"
                                                                                    data-feather="edit"></i>remind
                                                                                me</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=""><i
                                                                                    class="icon-font-light iw-16 ih-16"
                                                                                    data-feather="settings"></i>setting</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="play-btn" data-bs-toggle="modal" data-bs-target="#videoPlayer">
                                                    <img src="../assets/images/icon/play.png"
                                                        class="img-fluid blur-up lazyload" alt="play">
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <h3>christmas 2021</h3>
                                                <h6>26 january 2021</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                </p>
                                                <div class="bottom-part">
                                                    <a href="#" class="event-btn">share</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top games and event section end -->
                @endforeach
                @else

                @endif
            @else
            <!-- top games and event section start -->
            <div class="container-fluid section-b-space section-t-space px-0">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- favourite playlist -->
                        <div class="playlist-sec">
                            <div class="card-title">
                                <h3>User</h3>
                            </div>
                            <div class="table-sec">
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="img-sec">
                                                        @if ($user->photo)
                                                        <img src="{{ asset('storage/'.$user->photo)}}" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        @else
                                                        <img src="assets/images/user.png" class="img-fluid blur-up lazyload bg-img" alt="user">
                                                        @endif
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>{{ $user->name }}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>{{ $user->email }}</h6>
                                            </td>
                                            <td>
                                                <h5>Mendaftar Pada {{ $user->created_at->format('d-m-Y') }}</h5>
                                            </td>
                                            <td>
                                                <div class="setting-btn ms-2 setting-dropdown">
                                                    <div class=" btn-group custom-dropdown arrow-none dropdown-sm">
                                                        <a class="d-flex" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="icon-dark stroke-width-3 iw-12 ih-12" data-feather="settings"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right custom-dropdown">
                                                            <ul>
                                                                <li>
                                                                    <a href="/volunteer/{{ $user->id }}"><i class="icon-font-light iw-16 ih-16" data-feather="edit"></i>Jadikan Volunteer</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top games and event section end -->
            @endif

        </div>

@endsection
