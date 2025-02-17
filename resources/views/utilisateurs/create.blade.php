<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">Ajouter un Utilisateur</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('utilisateurs.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez le nom">
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez l'email">
                            </div>
                            <div class="form-group">
                                <label for="mot_de_passe">Mot de Passe :</label>
                                <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" placeholder="Entrez le mot de passe">
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
