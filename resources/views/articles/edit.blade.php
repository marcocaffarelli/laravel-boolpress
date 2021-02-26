@include('layouts.head')
<body>
    <div class="edit d-flex">
        <h1>EDIT</h1>
        <div class="container_form d-flex">
            <form action="{{route('articles.update', ['article'=> $article->id])}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{$article->title}}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="description">DESCRIPTION</label><br>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="inserisci il testo">{{$article->description}}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select class="form-control" name="tags[]" id="tags" multiple>
                        @if($tags)
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}" {{ $article->tags->contains($tag) ? 'selected' : '' }}>{{$tag->tag}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('tags')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button type="submit" class="btn bg-primary">SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>