@include('layout.element.head')

<body>


    @include('layout.element.loader_page')


    @include('layout.element.navbar')


    <!-- page body start -->
    <div class="page-body container-fluid newsfeed-style6 single-post custom-padding">

        @include('layout.element.sidebar')

        @yield('container')

    </div>
    <!-- page body end -->

    @include('layout.element.footer_script')
