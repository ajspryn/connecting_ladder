@extends('layout.front.main')

@section('container')

<div class="page-center">

    <div class="post-panel infinite-loader-sec section-t-space">
        <div class="post-wrapper col-grid-box section-t-space">
            <div class="post-title">
                <div class="profile">
                    <div class="media">
                        <a class="user-img" href="/" data-placement="right">
                            <img src="../assets/images/user-sm/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="user">
                        </a>
                        <div class="media-body">
                            <h5>{{ $forum->user->name }}</h5>
                            <h6>{{ $forum->created_at->DiffForHumans() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-details">
                <div class="img-wrapper">
                    <img src="https://source.unsplash.com/1500x1000/?forum" class="img-fluid blur-up lazyload" alt="">
                </div>
                <div class="detail-box">
                    <h3 style="align-content: center" class="mt-2">{{ $forum->judul }}</h3>
                    <h5 class="tag mb-2 "><span>{{ $forum->kategori }}</span></h5>
                    {!! $forum->isi !!}
                </div>
                {{-- @if ($komentars->where('post_id' , $forum->id))
                <div class="comment-section">
                    <div class="comments d-block">
                        @foreach ($komentars->where('post_id' , $forum->id) as $komentar)
                        <div class="main-comment">
                            <div class="media">
                                <a class="user-img" href="#">
                                    <img src="../assets/images/user-sm/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="user">
                                </a>
                                <div class="media-body">
                                    <a href="profile/{{ $komentar->user->id }}">
                                        <h5>{{ $komentar->user->name }}</h5>
                                    </a>
                                    <p>{{ $komentar->komentar }}</p>
                                </div>
                                <div class="comment-time">
                                    <h6>{{ $komentar->created_at->DiffForHumans() }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else

                @endif --}}

            </div>
        </div>
    </div>

    <div class="post-panel infinite-loader-sec section-t-space">
        <div class="post-wrapper col-grid-box section-t-space">
            @if ($komentars)
            <div class="comment-section">
                <div class="comments d-block">
                    @foreach ($komentars as $komentar)
                    <div class="main-comment">
                        <div class="media">
                            <a class="user-img" href="#">
                                <img src="../assets/images/user-sm/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="user">
                            </a>
                            <div class="media-body">
                                <a href="profile/{{ $komentar->user->id }}">
                                    <h5>{{ $komentar->user->name }}</h5>
                                </a>
                                <p>{{ $komentar->komentar }}</p>
                            </div>
                            <div class="comment-time">
                                <h6>{{ $komentar->created_at->DiffForHumans() }}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            Belum ada diskusi
            @endif
        </div>
    </div>

    <!-- create post -->
    @auth
    <div class="create-post mb-5">
        <div class="static-section">
            <form action="/komentar_forum" method="POST">
                @csrf
                <div class="search-input input-style icon-right">
                    <input type="text" class="form-control enable"
                        placeholder="Komentar..." name="komentar">
                    <input type="hidden" class="form-control enable" name="user_id"
                        value="{{ Auth::user()->id }}">
                    <input type="hidden" class="form-control enable" name="forum_id"
                        value="{{ $forum->id }}">
                </div>
        </div>
        <div class="post-btn">
            <button type="submit">Kirim</button>
        </div>
        </form>
    </div>
    @endauth

</div>

@endsection
