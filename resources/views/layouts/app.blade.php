@include('layouts.head')
    <body>
        @include('layouts.header')
        @yield('main')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>