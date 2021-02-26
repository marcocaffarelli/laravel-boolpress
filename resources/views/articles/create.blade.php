@include('layouts.head')
<body>
    <div class="create d-flex">
        <h1>NEW ARTICLE</h1>
        <div class="container_form d-flex">
            <form action="{{route('articles.store')}}" method="post">
                @csrf
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="description">DESCRIPTION</label><br>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="inserisci il testo"></textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select class="form-control" name="tags[]" id="tags" multiple>
                        @if($tags)
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->tag}}</option>
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