@include('layouts.head')
<body>
    <div class="index">
        <h2>ARTICLES</h2>
        <a href="{{route('articles.create')}}"><button class="btn bg-primary">Crea un nuovo articolo</button></a>
        @foreach($articles as $article)
            <div class="post row d-flex">
                <div class="col-lg-2">
                    <h3><strong>TITOLO: </strong><br>{{$article->title}}</h3>
                </div>
                <div class="col-lg-5">
                    <p><strong>DESCRIPTION: </strong><br>{{$article->description}}</p>
                </div>
                <div class="col">
                    <p><strong>CREATED: </strong><br>{{$article->created_at}}</p>
                </div>
                <div class="col">
                    <p><strong>UPDATED: </strong><br>{{$article->updated_at}}</p>        
                </div>
            </div>
        @endforeach
    </div>
</body>