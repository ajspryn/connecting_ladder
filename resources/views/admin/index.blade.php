@extends('layout.admin.main')

@section('container')

        <div class="page-center">
            <div class="container-fluid section-t-space  px-0">
                <div class="page-content">
                    <div class="content-center content-full w-100">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- create post -->
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
                                        <div class="search-input input-style icon-right">
                                            <input type="text" class="form-control enable"
                                                placeholder="write something here..">
                                            <a href="#">
                                                <img src="../assets/images/icon/translate.png"
                                                    class="img-fluid blur-up lazyload icon" alt="translate">
                                            </a>
                                        </div>
                                    </div>
                                    <div id="post-btn" class="post-btn">
                                        <button>post</button>
                                    </div>
                                </div>
                                <div class="overlay-bg"></div>
                                <div class="post-panel infinite-loader-sec section-t-space">
                                    <div class="post-wrapper col-grid-box">
                                        <div class="post-title">
                                            <div class="profile">
                                                <div class="media">
                                                    <a class="popover-cls user-img" data-bs-toggle="popover" data-placement="right"
                                                        data-name="sufiya eliza" data-img="../assets/images/user-sm/1.jpg">
                                                        <img src="../assets/images/user-sm/1.jpg"
                                                            class="img-fluid blur-up lazyload bg-img" alt="user">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5>{{ Auth::user()->name }}</h5>
                                                        <h6>30 mins ago</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-details">
                                            <div class="detail-box">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                    has been the industry's standard dummy text ever since the 1500s
                                                </p>
                                            </div>
                                            <div class="post-react">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="iw-18 ih-18" data-feather="message-square"></i> comment
                                                        </a>
                                                    </li>
                                                    <li data-bs-target="#shareModal" data-bs-toggle="modal">
                                                        <a href="#">
                                                            <i class="iw-16 ih-16" data-feather="share"></i> share
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="comment-section">
                                                <div class="comments d-block">
                                                    <div class="ldr-comments">
                                                        <ul>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="ldr-img"></div>
                                                                    <div class="media-body">
                                                                        <div class="contents">
                                                                            <div class="ldr-content"></div>
                                                                            <div class="ldr-content"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="sub-comment">
                                                                    <li>
                                                                        <div class="media">
                                                                            <div class="ldr-img"></div>
                                                                            <div class="media-body">
                                                                                <div class="contents">
                                                                                    <div class="ldr-content"></div>
                                                                                    <div class="ldr-content"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="ldr-img"></div>
                                                                    <div class="media-body">
                                                                        <div class="contents">
                                                                            <div class="ldr-content"></div>
                                                                            <div class="ldr-content"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="media">
                                                                    <div class="ldr-img"></div>
                                                                    <div class="media-body">
                                                                        <div class="contents">
                                                                            <div class="ldr-content"></div>
                                                                            <div class="ldr-content"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="main-comment">
                                                        <div class="media">
                                                            <a href="#" class="user-img popover-cls" data-bs-toggle="popover"
                                                                data-placement="right" data-name="Pabelo mukrani"
                                                                data-img="../assets/images/user-sm/2.jpg">
                                                                <img src="../assets/images/user-sm/2.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt="user">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h5>Pabelo Mukrani</h5>
                                                                </a>
                                                                <p>Oooo Very Cute and Sweet Dog, happy birthday Cuty....
                                                                    &#128578;
                                                                </p>
                                                                <ul class="comment-option">
                                                                    <li><a href="#">like (5)</a></li>
                                                                    <li><a href="#">reply</a></li>
                                                                    <li><a href="#">translate</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-time">
                                                                <h6>50 mins ago</h6>
                                                            </div>
                                                        </div>
                                                        <div class="sub-comment">
                                                            <div class="media">
                                                                <a href="#" class="user-img popover-cls" data-bs-toggle="popover"
                                                                    data-placement="right" data-name="sufiya elija"
                                                                    data-img="../assets/images/user-sm/3.jpg">
                                                                    <img src="../assets/images/user-sm/3.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h5>sufiya elija</h5>
                                                                    </a>
                                                                    <p>Thank You So Much ❤❤</p>
                                                                    <ul class="comment-option">
                                                                        <li><a href="#">like</a></li>
                                                                        <li><a href="#">reply</a></li>
                                                                        <li><a href="#">translate</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-time">
                                                                    <h6>50 mins ago</h6>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <a href="#" class="user-img popover-cls" data-bs-toggle="popover"
                                                                    data-placement="right" data-name="sufiya eliza"
                                                                    data-img="../assets/images/user-sm/4.jpg">
                                                                    <img src="../assets/images/user-sm/4.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img" alt="user">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a href="#">
                                                                        <h5>sufiya elija</h5>
                                                                    </a>
                                                                    <p>Thank You So Much ❤❤</p>
                                                                    <ul class="comment-option">
                                                                        <li><a href="#">like</a></li>
                                                                        <li><a href="#">reply</a></li>
                                                                        <li><a href="#">translate</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-time">
                                                                    <h6>50 mins ago</h6>
                                                                </div>
                                                            </div>
                                                            <a href="javascript:void(0)" class="loader">
                                                                <i class="iw-15 ih-15" data-feather="rotate-cw"></i> load more
                                                                replies
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="main-comment">
                                                        <div class="media">
                                                            <a href="#" class="user-img popover-cls" data-bs-toggle="popover"
                                                                data-placement="right" data-name="pabelo mukrani"
                                                                data-img="../assets/images/user-sm/2.jpg">
                                                                <img src="../assets/images/user-sm/2.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt="user">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h5>Pabelo Mukrani</h5>
                                                                </a>
                                                                <p>It’s party time, Sufiya..... and happy birthday cuty 🎉🎊</p>
                                                                <ul class="comment-option">
                                                                    <li><a href="#">like</a></li>
                                                                    <li><a href="#">reply</a></li>
                                                                    <li><a href="#">translate</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment-time">
                                                                <h6>50 mins ago</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reply">
                                                    <div class="search-input input-style input-lg icon-right">
                                                        <input type="text" class="form-control emojiPicker"
                                                            placeholder="write a comment..">
                                                        <a href="javascript:void(0)">
                                                            <i data-feather="smile" class="icon icon-2 iw-14 ih-14"></i>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <i data-feather="camera" class="icon iw-14 ih-14"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
