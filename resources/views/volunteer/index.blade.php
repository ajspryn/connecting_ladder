@extends('layout.front.main')

@section('container')

        <div class="page-center">

            <!-- profile menu start -->
            <div class="profile-menu ms-0 me-0">
                @auth
                @if (Auth::user()->role==2)
                <ul>
                    <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#tambahvolunteer">
                            <i class="iw-14 ih-14" data-feather="plus"></i>
                            <h6>Tambah Volunteer</h6>
                        </a>
                    </li>
                </ul>
                @endif
                @endauth
                <ul class="right-menu d-xl-flex d-none">
                    <li>
                        <form action="/volunteer">
                        <div class="search-bar input-style icon-left search-inmenu">
                            <i class="iw-14 ih-14 icon icon-theme" data-feather="search"></i>
                            <input type="text" class="form-control" name="pencarian" value="{{ request('pencarian') }}" placeholder="Cari Topik...">
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
            @foreach ($users as $user)
            <div class="profile-box">
                <div class="profile-content mt-3">
                    <a href="profile.html" class="image-section">
                        <div class="profile-img">
                            <div>
                                <img src="../assets/images/story/8.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="profile">
                            </div>
                            <span class="stats">
                                <img src="../assets/images/icon/verified.png" class="img-fluid blur-up lazyload"
                                    alt="verified">
                            </span>
                        </div>
                    </a>
                    <div class="profile-detail">
                        <a href="/volunteer/{{ $user->id }}">
                            <h2>{{ $user->name }}</h2>
                        </a>
                        <h5>{{ $user->email }}</h5>
                        <a href="/volunteer/{{ $user->id }}" class="btn btn-solid">Jadikan Volunteer</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else

            @endif

            <div class="container-fluid section-t-space px-0">
                <div class="page-content">

                    <div class="content-center w-100">
                        <!-- friend list -->
                        <div class="friend-list-box section-b-space">
                            <div class="card-title">
                                <h3>Volunteer</h3>
                            </div>
                            <div class="container-fluid">
                                <div class="friend-list friend-page-list">
                                    <ul>
                                        @foreach ($volunteers as $volunteer)
                                        <li>
                                            <div class="profile-box friend-box">
                                                <div class="profile-content">
                                                    <div class="image-section">
                                                        <div class="profile-img">
                                                            <div>
                                                                <img src="../assets/images/user-sm/1.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt="profile">
                                                            </div>
                                                            <span class="stats">
                                                                <img src="../assets/images/icon/verified.png"
                                                                    class="img-fluid blur-up lazyload" alt="verified">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-detail">
                                                        <h2>{{ $volunteer->name }}</h2>
                                                        <h5>{{ $volunteer->email }}</h5>
                                                        <div class="counter-stats">
                                                            <ul>
                                                                <li>
                                                                    <h3 class="counter-value">{{ $forums->where('user_id',$volunteer->user_id)->count() }}</h3>
                                                                    <h5>Forum</h5>
                                                                </li>
                                                                <li>
                                                                    <h3 class="counter-value">{{ $post->where('user_id', $volunteer->user_id)->count() }}</h3>
                                                                    <h5>Post</h5>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <br>
                                                        @php
                                                        $nama_universitas=App\Models\Universitas::select()->where('id',$volunteer->universitas_id)->get()->first()
                                                        @endphp
                                                        <h5>{{ $nama_universitas->nama_universitas }}</h5>
                                                        <a href="/volunteer/{{ $volunteer->user_id }}" class="btn btn-outline">Lihat profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <!-- Edit Profile modal start -->
    <div class="modal fade mobile-full-width" id="tambahvolunteer" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-custom-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Masukan Email Volunteer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/volunteer">
                <div class="modal-body">
                    <div class="search-bar input-style icon-left search-inmenu">
                        <i class="iw-14 ih-14 icon icon-theme" data-feather="search"></i>
                        <input type="text" class="form-control" name="pencarian" value="{{ request('pencarian') }}" placeholder="Cari Email User...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-solid">Cari User</button>
                </div>
                <form>
            </div>
        </div>
    </div>
    <!-- Edit Profile modal end -->

@endsection
