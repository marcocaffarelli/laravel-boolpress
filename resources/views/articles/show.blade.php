@extends('layouts.head')
<body>
    <div class="show">
        <div>
            <h3><strong>TITOLO: </strong>{{$article->title}}</h3>
            <p class="body"><strong>BODY: </strong>{{$article->description}}</p>
            <p class="data"><strong>CREATED: </strong>{{$article->created_at}}</p>
            <p class="data"><strong>UPDATED: </strong>{{$article->updated_at}}</p>
        </div>
        <a href="{{ route('blog') }}" class="btn">RETURN</a>
    </div>
</body>