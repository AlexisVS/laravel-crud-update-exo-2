@extends("template.index")
@section('content')
    <div class="container">

        <h1>Tous les membres</h1>
        <form action="/membre/delete-all" method="POST">
            @csrf
            @method("DELETE")
            <input class="btn btn-danger text-white" type="submit" value="Supprimer la table">
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Genre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membres as $membre)
                    <tr>
                        <th scope="row">{{ $membre->id }}</th>
                        <td>{{ $membre->nom }}</td>
                        <td>{{ $membre->age }}</td>
                        <td>{{ $membre->genre }}</td>
                        <td class="d-flex">
                            <form action="/membre/{{ $membre->id }}/delete" method="POST">
                                @csrf
                                @method("DELETE")
                                <input class="btn btn-danger text-white" type="submit" value="X">
                            </form>
                            <a class="ms-3 btn btn-primary text-white" href="/membre/{{ $membre->id }}/show">Voir le membre</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
