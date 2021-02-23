<header>
    <nav>
        <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
        <a href="{{ route('categories') }}" class="{{Route::currentRouteName() === 'categories' ? 'active' : '' }}">CATEGORIES</a>
        <a href="{{ route('articles') }}" class="{{Route::currentRouteName() === 'articles' ? 'active' : '' }}">ARTICLES</a>
    </nav>
</header>