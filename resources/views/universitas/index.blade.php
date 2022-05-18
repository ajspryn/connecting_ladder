@extends('layout.front.main')

@section('container')

        <div class="page-center">

            <!--  event cover start -->
            <div class="event-cover light-cover">
                <div class="event-img">
                    <img src="https://source.unsplash.com/1500x1000/?university" class="img-fluid blur-up lazyload bg-img" alt="">
                    <div class="event-content">
                        <h1>Universitas</h1>
                    </div>
                    <div class="cover-img-detail">
                        <span>{{ $universitass->count() }} Universitas</span>
                    </div>
                </div>
            </div>
            <!--  event cover end -->

            <div class="container-fluid section-t-space px-0">
                <div class="page-content">

                    <div class="content-center w-100">
                        <!-- profile menu start -->
                        <div class="profile-menu ms-0 me-0">
                            @auth
                            @if (Auth::user()->role==2)
                            <ul>
                                <li>
                                    <a href="/universitas/create">
                                        <i class="iw-14 ih-14" data-feather="plus"></i>
                                        <h6>Tambah Universitas</h6>
                                    </a>
                                </li>
                            </ul>
                            @endif
                            @endauth
                            <ul class="right-menu d-xl-flex d-none">
                                <li>
                                    <form action="/universitas">
                                    <div class="search-bar input-style icon-left search-inmenu">
                                        <i class="iw-14 ih-14 icon icon-theme" data-feather="search"></i>
                                        <input type="text" class="form-control" name="pencarian" value="{{ request('pencarian') }}" placeholder="Cari Universitas...">
                                        <div class="btn-section">
                                            <button action="submit" class="btn btn-solid btn-lg mx-auto">Cari</button>
                                        </div>
                                    </div>
                                    <form>
                                </li>
                            </ul>
                        </div>
                        <!-- profile menu end -->
                        <!-- page list -->
                        <div class="page-list-section section-t-space">
                            <div class="row">
                                @foreach ($universitass as $universitas)
                                <div class="col-xl-4 col-lg-4 col-sm-12">
                                    <div class="list-box">
                                        <div class="cover-img">
                                            @if ($universitas->foto_cover)
                                                <img src="{{ asset('storage/'.$universitas->foto_cover)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                            @else
                                                <img src="https://source.unsplash.com/1500x1000/?university-{{ $universitas->id }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                            @endif
                                            <div class="logo-img">
                                                <a href="#">
                                                    <img src="{{ asset('storage/'.$universitas->logo)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="page-name">
                                                <a href="/universitas/{{ $universitas->id }}">
                                                    <h4>{{ $universitas->nama_universitas }}</h4>
                                                </a>
                                                <h6>{{ $universitas->provinsi }}, {{ $universitas->kabkota }}</h6>
                                            </div>
                                            <div class="counter-stats">
                                                <ul>
                                                    <li>
                                                        <h3 class="counter-value">{{ $volunteer->where('universitas_id', $universitas->id)->count() }}</h3>
                                                        <h5>Volunteer</h5>
                                                    </li>
                                                    <li>
                                                        <h3 class="counter-value">{{ $forum->where('universitas_id', $universitas->id)->count() }}</h3>
                                                        <h5>Forum</h5>
                                                    </li>
                                                    {{-- <li>
                                                        <h3 class="counter-value">6845</h3>
                                                        <h5>followers</h5>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                            <div class="bottom-btn">
                                                <a href="/universitas/{{ $universitas->id }}" class="btn btn-solid">Lihat</a>
                                                @auth
                                                @if (Auth::user()->role==2)
                                                <a href="/universitas/{{ $universitas->id }}/edit" class="btn btn-solid">Edit</a>
                                                @endif
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
