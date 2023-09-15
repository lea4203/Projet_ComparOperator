<!DOCTYPE html>
<html>
<head>
    <title>Connexion Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Ajouter un  Administrateur</h2>
                    </div>
                    <div class="card-body">
                        <form action="../traitement/traitement_ajout_administrator.php" method="POST">
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur:</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary" value="Se connecter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
