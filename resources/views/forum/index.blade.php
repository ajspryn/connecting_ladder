@extends('layout.front.main')

@section('container')

<div class="page-center">

    <!-- profile menu start -->
    <div class="profile-menu section-t-space mb-3">
        @auth
        @if (Auth::user()->id !== 0)
        <ul>
            <li>
                <a href="/forum/create">
                    <i class="iw-14 ih-14" data-feather="plus"></i>
                    <h6>Tambah</h6>
                </a>
            </li>
        </ul>
        @endif
        @endauth
        <ul class="right-menu d-xl-flex">
            <li>
                <form action="forum">
                <div class="search-bar input-style icon-left search-inmenu">
                    <i class="iw-14 ih-14 icon icon-theme" data-feather="search"></i>
                    <input type="text" class="form-control" name="pencarian" value="{{ request('pencarian') }}" placeholder="Cari Topik...">
                    <div class="btn-section">
                        <button action="submit" class="btn btn-solid btn-lg mx-auto">Cari</button>
                    </div>
                </div>
                <form>
            </li>
        </ul>
    </div>
    <!-- profile menu end -->

    @if ($forums->count())

    <!--  event cover start -->
    <div class="event-cover light-cover">
        <div class="event-img">
            <img src="https://source.unsplash.com/1500x1000/?forum" class="img-fluid blur-up lazyload bg-img" alt="">
            <div class="cover-img-detail">
                <span>{{ $forums->first()->created_at->DiffForHumans() }}</span>
                <h3>{{ $forums->first()->judul }}</h3>
                <a href="/forum/{{ $forums->first()->id }}">Lihat detail <i class="fas ms-1 fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <!--  event cover end -->

    <!-- top games and event section start -->
    <div class="container-fluid section-b-space section-t-space px-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="event-section overflow-hidden">
                    <div class="event_category no-arrow default-space">
                        @foreach ($forums->skip(1) as $forum)
                        <div>
                            <div class="event-box ratio2_3">
                                <a href="/forum/{{ $forum->id }}">
                                    <div class="image-section">
                                        <img src="https://source.unsplash.com/1500x1000/?forum-2" class="img-fluid blur-up lazyload bg-img" alt="event">
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
                                        <h6>{{ $forum->user->name }}</h6>
                                        <h6>{{ $forum->created_at->DiffForHumans() }}</h6>
                                    </a>
                                    <a href="/forum/{{ $forum->id }}">
                                        <p>{{ $forum->excerpt }}</p>
                                    </a>
                                    <div class="bottom-part">
                                        <a href="/forum/{{ $forum->id }}" class="event-btn">Lihat Selengkap nya</a>
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
    <!-- top games and event section end -->

    @else


    @endif

</div>

@endsection
