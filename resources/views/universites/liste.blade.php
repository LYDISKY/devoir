<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des universités</title>
    <!-- Liens vers les fichiers CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des universités</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Localisation</th>
                    <th>Description</th>
                    <th>Logo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($universites as $universite)
                <tr>
                    <td>{{ $universite->nom }}</td>
                    <td>{{ $universite->localisation }}</td>
                    <td>{{ $universite->description }}</td>
                    <td>
                        @if($universite->logo)
                            <img src="{{ asset('storage/app/public/' . $universite->logo) }}" alt="Logo de {{$universite->nom}}" style="max-width: 100px;">
                        @else
                            Aucun logo disponible
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('universites.edit', $universite->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{ route('universites.delete', $universite->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette université ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('universites.create') }}" class="btn btn-primary mb-3">Ajouter une université</a>
        <a href="{{ route('notations.index') }}" class="btn btn-primary mb-3">Voir les notes</a>
    </div>

    <!-- Liens vers les fichiers JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
