@extends('layouts.head')
<body>
    <div class="show">
        <div>
            <h3><strong>TAG: </strong>{{$tag->tag}}</h3>
            <p class="data"><strong>CREATED: </strong>{{$tag->created_at}}</p>
            <p class="data"><strong>UPDATED: </strong>{{$tag->updated_at}}</p>

        </div>
        <a href="{{ route('tags.index') }}" class="btn">RETURN</a>
    </div>
</body>