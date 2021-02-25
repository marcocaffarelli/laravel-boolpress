@include('layouts.head')
<body>
    <div class="index">
        <h2>ARTICLES</h2>
        <a href="{{route('articles.create')}}"><button class="btn bg-primary">Crea un nuovo articolo</button></a>
        @foreach($articles as $article)
            <div class="article row d-flex">
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
                <div>
                    <a href="{{route('articles.show', ['article'=> $article->id])}}" class="col btn bg-primary">
                        View
                    </a>
                </div>
                <div>
                    <a href="{{route('articles.edit', ['article'=> $article->id])}}" class="col btn bg-warning">
                        Edit
                    </a>
                </div>
                <div>
                <!-- Button trigger modal -->           
                    <button type="button" class="col btn bg-danger" data-toggle="modal" data-target="#delete-{{$article->id}}" >Delete</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="delete-{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="#delete-{{$article->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="article-delete-{{$article->id}}">Delete article: {{$article->title}}</h5>
                            </div>
                            <div class="modal-body">
                                Sei sicuro?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('articles.destroy', $article->id) }}" class="col" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>



