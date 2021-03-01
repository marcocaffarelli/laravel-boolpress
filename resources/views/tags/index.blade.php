@include('layouts.head')
<body>
    <div class="index">
        <h2>TAGS</h2>
        <a href="{{route('tags.create')}}"><button class="btn bg-primary">Crea un nuovo tag</button></a>
        @foreach($tags as $tag)
            <div class="article row d-flex">
                <div class="col-lg-2">
                    <h3><strong>TAG: </strong><br>{{$tag->tag}}</h3>
                </div>
                <div class="col">
                    <p><strong>CREATED: </strong><br>{{$tag->created_at}}</p>
                </div>
                <div class="col">
                    <p><strong>UPDATED: </strong><br>{{$tag->updated_at}}</p>        
                </div>
                <div>
                    <a href="{{route('tags.show', ['tag'=> $tag->id])}}" class="col btn bg-primary">
                        View
                    </a>
                </div>
                <div>
                    <a href="{{route('tags.edit', ['tag'=> $tag->id])}}" class="col btn bg-warning">
                        Edit
                    </a>
                </div>
                <div>
        
                <form action="{{ route('tags.destroy', $tag->id) }}" class="col" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-danger">Delete</button>
                </form>
                </div>
      
            </div>
        @endforeach
    </div>
</body>



