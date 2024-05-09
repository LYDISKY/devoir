<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur l'application de notation des universités</title>
    <!-- Intégration de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: aquamarine;
            background-size: cover; /* Pour que l'image couvre toute la page */
            background-position: center; /* Pour centrer l'image */
            background-repeat: no-repeat;
        }
        .content {
    position: relative; /* Pour positionner le contenu par rapport à l'image de fond */
    z-index: 1; /* Pour placer le contenu au-dessus de l'image de fond */
    /* Ajoutez d'autres styles selon vos besoins */
}
        .container {
            padding-top: 100px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }
        .lead {
            font-size: 20px;
            margin-bottom: 40px;
        }
        .btn {
            margin: 0 10px;
            font-size: 18px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container content">
        <h1>Bienvenue sur l'application de notation des universités</h1>
        <p class="lead">Connectez-vous ou inscrivez-vous pour accéder à notre contenu.</p>
        <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
        <a href="{{ route('register') }}" class="btn btn-success">S'inscrire</a>
    </div>

    <!-- Intégration de Bootstrap JS (optionnel) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
