<header>
    <nav>
        <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
        <a href="{{ route('posts') }}" class="{{Route::currentRouteName() === 'posts' ? 'active' : '' }}">POSTS</a>
    </nav>
</header>