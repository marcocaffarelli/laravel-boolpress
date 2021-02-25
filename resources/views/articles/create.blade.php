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
                <div>
                    <label for="description">DESCRIPTION</label><br>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="inserisci il testo"></textarea>
                </div>
                <button type="submit" class="btn bg-primary">SUBMIT</button>
                <select>
                        <option>Tutti</option>
                        <option>Rock</option>
                        <option>Jazz</option>
                        <option>Pop</option>
                        <option>Metal</option>
                </select>
                
            </form>            
        </div>

    </div>
</body>