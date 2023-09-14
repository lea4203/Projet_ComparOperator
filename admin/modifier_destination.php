<?php
require_once '../classes/Manager.php';
require_once '../config/db.php';

$manager = new Manager($db);

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $destinationId = $_GET["id"];
    $destination = $manager->getDestination($destinationId);

    if (!$destination) {
        echo "Destination non trouvée.";
        exit;
    }
} else {
    echo "Requête invalide.";
    exit;
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Destination</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Modifier Destination</h1>
        <form action="../traitement/traitement_update_destination.php?id=<?php echo $destinationId; ?>" method="POST">
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo $destination['location']; ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prix</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $destination['price']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

