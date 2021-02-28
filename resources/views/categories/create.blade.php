@include('layouts.head')
<body>
    <div class="create d-flex">
        <h1>NEW CATEGORY</h1>
        <div class="container_form d-flex">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div>
                    <label for="name">TITOLO</label><br>
                    <input type="text" id="name" name="name" placeholder="Inserisci il titolo">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="description">DESCRIPTION</label><br>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="inserisci il testo"></textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn bg-primary">SUBMIT</button>                
            </form>            
        </div>

    </div>
</body>