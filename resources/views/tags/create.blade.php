@include('layouts.head')
<body>
    <div class="create d-flex">
        <h1>NEW TAG</h1>
        <div class="container_form d-flex">
            <form action="{{route('tags.store')}}" method="post">
                @csrf
                <div>
                    <label for="tag">TAG</label><br>
                    <input type="text" id="tag" tag="tag" placeholder="Inserisci il tag">
                </div>
                @error('tag')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn bg-primary">SUBMIT</button>                
            </form>            
        </div>

    </div>
</body>