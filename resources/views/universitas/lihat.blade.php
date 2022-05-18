@extends('layout.front.main')

@section('container')

        <div class="page-center">

            <!-- page cover start -->
            <div class="page-cover">
                <div class="cover-img">
                    @if ($universitas->foto_cover)
                        <img src="{{ asset('storage/'.$universitas->foto_cover)}}" class="img-fluid blur-up lazyload bg-img" alt="cover">
                    @else
                        <img src="https://source.unsplash.com/1500x1000/?university-{{ $universitas->id }}" class="img-fluid blur-up lazyload bg-img" alt="cover">
                    @endif
                </div>
                <div class="cover-content">
                    <div class="page-logo">
                        <a href="#">
                            <img src="{{ asset('storage/'.$universitas->logo) }}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </a>
                    </div>
                    <div class="page-name mt-3">
                        <a href="#">
                            <h4>{{ $universitas->nama_universitas }}</h4>
                            <h6>{{ $universitas->alamat_email }}</h6>
                        </a>
                    </div>
                    <div class="page-stats">
                        <ul>
                            <li>
                                <h2>{{ $forums->count() }}</h2>
                                <h6>Forum</h6>
                            </li>
                            <li>
                                <h2>{{ $volunteer->count() }}</h2>
                                <h6>Volunteer</h6>
                            </li>
                            <li>
                                <h2>A</h2>
                                <h6>Akreditasi</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="social-btn">
                        <ul>
                            <li class="whatsapp">
                                <a href="#">
                                    <svg>
                                        <use xlink:href="../assets/svg/icons.svg#whatsapp"></use>
                                    </svg>
                                    <h6>whatsapp</h6>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="#">
                                    <svg>
                                        <use xlink:href="../assets/svg/icons.svg#instagram"></use>
                                    </svg>
                                    <h6>instagram</h6>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="#">
                                    <svg>
                                        <use xlink:href="../assets/svg/icons.svg#youtube"></use>
                                    </svg>
                                    <h6>youtube</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-center col-xl-12">
                <div class="post-panel infinite-loader-sec">
                    <div class="post-wrapper col-grid-box section-t-space">
                        <div class="post-title">
                            <div class="profile">
                                <div class="media">
                                    <div class="media-body">
                                        <p style="align-content: center">{!! $universitas->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-details">
                            <div class="detail-box">
                                <h5><i class="iw-16 ih-16" data-feather="map-pin"></i> {{ $universitas->alamat }} <span>{{ $universitas->desa }}, {{ $universitas->kecamatan }}, {{ $universitas->kabkota }}, {{ $universitas->provinsi }}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page cover end -->

            <div class="container-fluid section-t-space px-0">
                <div class="row">
                    <div class="content-left col-4 order-1 res-full-width">
                        <div class="sticky-top">
                            <div class="friend-list friend-page-list">
                                <ul>
                                    @foreach ($volunteer_universitass as $vu)
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
                                                    <h2>{{ $vu->name }}</h2>
                                                    <h5>{{ $vu->email }}</h5>
                                                    <div class="counter-stats">
                                                        <ul>
                                                            <li>
                                                                <h3 class="counter-value">{{ $forums->where('user_id',$vu->user_id)->count() }}</h3>
                                                                <h5>Forum</h5>
                                                            </li>
                                                            <li>
                                                                <h3 class="counter-value">{{ $post->where('user_id', $vu->user_id)->count() }}</h3>
                                                                <h5>Post</h5>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <br>
                                                    @php
                                                        $nama_universitas=App\Models\Universitas::select()->where('id',$vu->universitas_id)->get()->first()
                                                    @endphp
                                                    <h5>{{ $nama_universitas->nama_universitas }}</h5>
                                                    <a href="/volunteer/{{ $vu->user_id }}" class="btn btn-outline">Lihat profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-center col-xl-8">
                        <!-- tab section start -->
                        <div class="profile-menu section-b-space ms-0 me-0">
                            @auth
                            @if (Auth::user()->role==2)
                            <ul>
                                <li>
                                    <a href="/universitas/{{ $universitas->id }}/edit">
                                        <i class="iw-14 ih-14" data-feather="edit"></i>
                                        <h6>Ubah Data</h6>
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
                        @foreach ( $forums as $forum )
                        <div class="event-box section-t-space ratio2_3">
                            <a href="/forum/{{ $forum->id }}">
                                <div class="image-section">
                                    <img src="https://source.unsplash.com/1500x1000/?forum-{{ $forum->id }}" class="img-fluid blur-up lazyload bg-img" alt="event">
                                    <div class="card-title">
                                        <h3>{{ $forum->kategori }}</h3>
                                    </div>
                                </div>
                            </a>
                            <div class="event-content">
                                <a href="/forum/{{ $forum->id }}">
                                    <h3>{{ $forum->judul }}</h3>
                                </a>
                                <a href="/forum/{{ $forum->id }}">
                                    <h6>{{ $forum->name }}</h6>
                                    <h6>{{ $forum->created_at }}</h6>
                                </a>
                                <a href="/forum/{{ $forum->id }}">
                                    <p>{{ $forum->excerpt }}</p>
                                </a>
                                <div class="bottom-part">
                                    <a href="/forum/{{ $forum->id }}" class="event-btn">Lihat Selengkap nya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>


@endsection
