@extends("template.index")
@section('content')
    <div class="container">
        <h1>Editer le membre</h1>

        <form action="/membre/{{ $membre->id }}/update" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="addMembreInputName" class="form-label">{{ $membre->nom }}</label>
                <input type="text" name="nom" value="{{ $membre->nom }}" class="form-control" id="addMembreInputName">
            </div>
            <div class="mb-3">
                <label for="addMembreInputAge" class="form-label">{{ $membre->age }}</label>
                <input type="text" name="age" value="{{ $membre->age }}" class="form-control" id="addMembreInputAge">
            </div>
            <div class="mb-3">
                <select name="genre" value="{{ $membre->genre }}" class="form-select" aria-label="Default select example">
                    <option value="Male">Mâle</option>
                    <option value="Femelle">Femelle</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary text-white">Editer</button>
        </form>
    </div>
@endsection
