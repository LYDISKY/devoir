<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Notations</title>
    <!-- Styles Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles personnalisés */
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            margin-bottom: 30px;
            text-align: center;
            color: #007bff;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-action {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Notations</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Université</th>
                    <th>Score</th>
                    <th>Commentaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notations as $notation)
                <tr>
                    <td>{{ $notation->user ? $notation->user->name : 'Utilisateur non spécifié' }}</td>
                    <td>{{ $notation->universite ? $notation->universite->nom : 'Université non spécifiée' }}</td>
                    <td>{{ $notation->score }}</td>
                    <td>{{ $notation->commentaire }}</td>
                    <td>
                        <a href="{{ route('notations.edit', $notation->id) }}" class="btn btn-primary btn-action">Modifier</a>
                        <form action="{{ route('notations.destroy', $notation->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('notations.create') }}" class="btn btn-success">Ajouter une Notation</a>
        <a href="{{ route('home') }}" class="btn btn-primary">Retour au Dashboard</a>
    </div>
</body>
</html>
