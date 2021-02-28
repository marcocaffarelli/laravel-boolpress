@include('layouts.head')
<body>
    <div class="edit d-flex">
        <h1>EDIT</h1>
        <div class="container_form d-flex">
            <form action="{{route('tags.update', ['tag'=> $tag->id])}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <label for="tag">TAG</label><br>
                    <input type="text" id="tag" tag="tag" placeholder="Inserisci il tag" value="{{$tag->tag}}">
                </div>
                @error('tag')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn bg-primary">SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>