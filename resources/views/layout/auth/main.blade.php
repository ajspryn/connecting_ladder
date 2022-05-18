@include('layout.element.head')

<body>

    @include('layout.element.loader_logo')

        <!-- login section start -->
    <section class="login-section">
        <div class="header-section">
            <div class="logo-sec">
                <a href="index.html">
                    @include('layout.element.logo')
                </a>
            </div>
            <div class="right-links">
                <ul>
                    <li>
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            Daftar
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        @yield('container')

    </section>
    <!-- login section end -->

    @include('layout.element.footer_script')
