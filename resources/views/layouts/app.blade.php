@include('layouts.head')
    <body>
        @include('layouts.header')
        @yield('home')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>