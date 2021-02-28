@include('layouts.head')
<body>
    <div class="index">
        <h2>CATEGORIES</h2>
        <a href="{{route('categories.create')}}"><button class="btn bg-primary">Crea un nuova categoria</button></a>
        @foreach($categories as $category)
            <div class="article row d-flex">
                <div class="col-lg-2">
                    <h3><strong>TITOLO: </strong><br>{{$category->name}}</h3>
                </div>
                <div class="col-lg-5">
                    <p><strong>DESCRIPTION: </strong><br>{{$category->description}}</p>
                </div>
                <div class="col">
                    <p><strong>CREATED: </strong><br>{{$category->created_at}}</p>
                </div>
                <div class="col">
                    <p><strong>UPDATED: </strong><br>{{$category->updated_at}}</p>        
                </div>
                <div>
                    <a href="{{route('categories.show', ['category'=> $category->id])}}" class="col btn bg-primary">
                        View
                    </a>
                </div>
                <div>
                    <a href="{{route('categories.edit', ['category'=> $category->id])}}" class="col btn bg-warning">
                        Edit
                    </a>
                </div>
                <div>
        
                <form action="{{ route('categories.destroy', $category->id) }}" class="col" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-danger">Delete</button>
                </form>
                </div>
      
            </div>
        @endforeach
    </div>
</body>



