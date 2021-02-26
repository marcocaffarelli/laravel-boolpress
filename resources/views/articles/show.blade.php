@extends('layouts.head')
<body>
    <div class="show">
        <div>
            <h3><strong>TITOLO: </strong>{{$article->title}}</h3>
            <p class="body"><strong>BODY: </strong>{{$article->description}}</p>
            <p class="data"><strong>CREATED: </strong>{{$article->created_at}}</p>
            <p class="data"><strong>UPDATED: </strong>{{$article->updated_at}}</p>
            <span><strong>CATEGORY: </strong>{{$article->category->name}}</span>
            <div><strong>TAGS: </strong>
            @if( count($article->tags) > 0 )
                @foreach ($article->tags as $tag)
                    <span>{{$tag->tag}}</span>
                @endforeach
            @else
                <span>N/A</span>
            @endif
            </div>
        </div>
        <a href="{{ route('blog') }}" class="btn">RETURN</a>
    </div>
</body>