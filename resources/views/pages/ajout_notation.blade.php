<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noter l'université</title>
    <!-- Liens vers les fichiers CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center">Noter l'université</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notation_store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="universite">Université:</label>
                                <select id="universite" name="universite_id" class="form-control">
                                    @foreach($universites as $universite)
                                        <option value="{{ $universite->id }}">{{ $universite->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recherche">Recherche (sur 5):</label>
                                <input type="number" id="recherche" name="recherche" class="form-control" min="0" max="5" required>
                            </div>
                            <div class="form-group">
                                <label for="competences">Compétences (sur 5):</label>
                                <input type="number" id="competences" name="competences" class="form-control" min="0" max="5" required>
                            </div>
                            <div class="form-group">
                                <label for="expertise">Expertise (sur 5):</label>
                                <input type="number" id="expertise" name="expertise" class="form-control" min="0" max="5" required>
                            </div>
                            <div class="form-group">
                                <label for="experience">Expérience (sur 5):</label>
                                <input type="number" id="experience" name="experience" class="form-control" min="0" max="5" required>
                            </div>
                            <div class="form-group">
                                <label for="commentaire">Commentaire:</label>
                                <textarea id="commentaire" name="commentaire" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Noter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liens vers les fichiers JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
