@extends('layout.front.main')

@section('container')
<div class="page-center">
    <div class="container-fluid section-t-space px-0">
        <div class="page-content">
            <div class="content-center content-full w-100">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- stroy section start -->
                        <div class="story-section ratio_115">
                            <div class="slide-7 no-arrow default-space slick-slider mb-3">
                                @foreach ($universitass as $universitas)
                                <div>
                                    <a href="/universitas/{{ $universitas->id }}">
                                        <div class="story-box" data-bs-toggle="modal">
                                            <div class="adaptive-overlay yellow-overlay"></div>
                                            <div class="story-bg">
                                                @if ($universitas->foto_cover)
                                                    <img src="{{ asset('storage/'.$universitas->foto_cover)}}" class="img-fluid bg-img" data-adaptive-background='1' alt="">
                                                @else
                                                    <img src="https://source.unsplash.com/1500x1000/?university-{{ $universitas->id }}" class="img-fluid bg-img" data-adaptive-background='1' alt="">
                                                @endif
                                                {{-- <img src="https://source.unsplash.com/1500x1000/?university-{{ $universitas->id }}" class="img-fluid bg-img" data-adaptive-background='1' alt=""> --}}
                                            </div>
                                            <div class="story-content">
                                                <h6>{{ $universitas->nama_universitas }}</h6>
                                                <span>{{ $universitas->profinsi }}, {{ $universitas->kabkota }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- stroy section end -->
                        <!-- create post -->
                        @auth
                        <div class="create-post">
                            <div class="static-section">
                                <div class="card-title">
                                    <h3>create post</h3>
                                    <div class="settings">
                                        <div class="setting-btn ms-2 setting-dropdown no-bg">
                                            <div class="btn-group custom-dropdown arrow-none dropdown-sm">
                                                <div role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="icon icon-font-color iw-14"
                                                        data-feather="more-horizontal"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="post" method="POST">
                                    @csrf
                                    <div class="search-input input-style icon-right">
                                        <input type="text" class="form-control enable"
                                            placeholder="write something here.." name="post">
                                        <input type="hidden" class="form-control enable" name="user_id"
                                            value="{{ Auth::user()->id }}">
                                    </div>
                            </div>
                            <div class="post-btn">
                                <button type="submit">post</button>
                            </div>
                            </form>
                        </div>
                        @endauth
                        <div class="overlay-bg"></div>
                        <div class="post-panel infinite-loader-sec section-t-space">
                            @if ($posts)
                            @foreach ($posts as $post)
                            @if ($post->user->name)
                            <div class="post-wrapper col-grid-box section-t-space">
                                <div class="post-title">
                                    <div class="profile">
                                        <div class="media">
                                            <a class="user-img" href="/" data-placement="right">
                                                <img src="../assets/images/user-sm/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="user">
                                            </a>
                                            <div class="media-body">
                                                <h5>{{ $post->user->name }}</h5>
                                                <h6>{{ $post->created_at->DiffForHumans() }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-details">
                                    <div class="detail-box">
                                        <p>{{ $post->post }}</p>
                                    </div>
                                    <div class="post-react">
                                        <ul>
                                            @auth
                                            <li>
                                                <a href="komentar_post/{{ $post->id }}">
                                                    <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                                </a>
                                            </li>
                                            @endauth
                                            <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                                <a href="#">
                                                    <i class="iw-16 ih-16" data-feather="share"></i> share
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    @if ($komentars->where('post_id' , $post->id))
                                    <div class="comment-section">
                                        <div class="comments d-block">
                                            @foreach ($komentars->where('post_id' , $post->id) as $komentar)
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

                                    @endif
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @else

                            @endif
                        </div>
                        <div id="load-more" class="post-loader">
                            <div class="loader-icon">
                                <i class="icon-theme iw-25 ih-25" data-feather="rotate-ccw"></i>
                            </div>
                            <div class="no-more-text">
                                <p>no more post</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


