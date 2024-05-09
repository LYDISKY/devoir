<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la Notation</title>
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
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier la Notation</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('notations.update', $notation->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="user_id">Utilisateur :</label>
                                <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $notation->user->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="universite_id">Université :</label>
                                <input type="text" name="universite_id" id="universite_id" class="form-control" value="{{ $notation->universite->nom }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="score">Score :</label>
                                <input type="text" name="score" id="score" class="form-control" value="{{ $notation->score }}">
                            </div>
                            <div class="form-group">
                                <label for="commentaire">Commentaire :</label>
                                <textarea name="commentaire" id="commentaire" class="form-control">{{ $notation->commentaire }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <a href="{{ route('notations.index') }}" class="btn btn-secondary">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
