@extends("template.index")
@section('content')
    <div class="container">
        <h1>Profile du membre</h1>
        <p><strong>Id: </strong>{{ $membre->id }}</p>
        <p><strong>Nom: </strong>{{ $membre->nom }}</p>
        <p><strong>Age: </strong>{{ $membre->age }}</p>
        <p><strong>Genre: </strong>{{ $membre->genre }}</p>
        <a class="btn btn-success text-white mb-3" href="/membre/{{ $membre->id }}/edit">Editer</a>
        <form action="/membre/{{ $membre->id }}/delete" method="POST">
            @csrf
            @method("DELETE")
            <input class="btn btn-danger text-white" type="submit" value="X">
        </form>
    </div>
@endsection
