@include('layouts.head')
    <body>
        @include('layouts.header')
        @yield('main')
        @yield('articles')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>