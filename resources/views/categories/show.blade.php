@extends('layouts.head')
<body>
    <div class="show">
        <div>
            <h3><strong>NAME: </strong>{{$category->name}}</h3>
            <p class="body"><strong>BODY: </strong>{{$category->description}}</p>
            <p class="data"><strong>CREATED: </strong>{{$category->created_at}}</p>
            <p class="data"><strong>UPDATED: </strong>{{$category->updated_at}}</p>

        </div>
        <a href="{{ route('categories.index') }}" class="btn">RETURN</a>
    </div>
</body>