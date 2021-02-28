@include('layouts.head')
<body>
    <div class="edit d-flex">
        <h1>EDIT</h1>
        <div class="container_form d-flex">
            <form action="{{route('categories.update', ['category'=> $category->id])}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">TITOLO</label><br>
                    <input type="text" id="name" name="name" placeholder="Inserisci il titolo" value="{{$category->name}}">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="description">DESCRIPTION</label><br>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="inserisci il testo">{{$category->description}}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn bg-primary">SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>