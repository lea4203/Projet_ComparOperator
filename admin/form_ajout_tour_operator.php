<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Tour Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Formulaire de Tour Operator</h1>
        <form action="../traitement/traitement_form_tour_operator.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nom du tour operator</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="grade_count" class="form-label">Note global</label>
                <input type="text" class="form-control" id="grade_count" name="grade_count">
            </div>
            <div class="mb-3">
                <label for="grade_total" class="form-label">Note Total</label>
                <input type="text" class="form-control" id="grade_total" name="grade_total">
            <div class="mb-3">
                <label for="link" class="form-label">Lien</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
