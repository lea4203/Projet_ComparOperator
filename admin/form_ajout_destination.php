<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulaire de Destination</title>
</head>

<body>
<div class="container mt-5">
        <h1>Ajout de Destination</h1>
        <form method="post" action="../traitement/traitement_form_destination.php">
            <div class="mb-3">
                <label for="location" class="form-label">Pays</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Entrez la localisation">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prix :</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Entrez le prix">
            </div>
            <div class="mb-3">
                <label for="tour_operator_id" class="form-label">Tour Operator ID :</label>
                <input type="text" class="form-control" id="tour_operator_id" name="tour_operator_id" placeholder="Entrez l'ID du tour operator">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>