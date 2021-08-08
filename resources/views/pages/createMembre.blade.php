@extends("template.index")
@section('content')
    <div class="container">
        <h1>Ajouter un membre</h1>

        <form action="membre/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="addMembreInputName" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="addMembreInputName">
            </div>
            <div class="mb-3">
                <label for="addMembreInputAge" class="form-label">Age</label>
                <input type="text" name="age" class="form-control" id="addMembreInputAge">
            </div>
            <div class="mb-3">
                <select name="genre" class="form-select" aria-label="Default select example">
                    <option selected value="Male">Mâle</option>
                    <option value="Femelle">Femelle</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary text-white">Ajouter</button>
        </form>
    </div>
@endsection
