@include('layouts.head')
    <body>
        @include('layouts.header')
        @yield('home')
        @yield('articles')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>