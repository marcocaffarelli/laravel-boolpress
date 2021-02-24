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
                <div>
                    <label for="description">DESCRIPTION</label><br>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="inserisci il testo">{{$article->description}}</textarea>
                </div>
                <button type="submit" class="btn bg-primary">SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>