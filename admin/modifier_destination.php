<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

$destinationId = null;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $manager = new Manager($db);

    $destination = $manager->getDestination($id);

    if (!$destination) {
        echo "Destination non trouvée.";
        exit;
    }

    $destinationId = $destination['id'];
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
        <form action="../traitement/traitement_update_destination.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $destinationId; ?>">
            <div class="mb-3">
                <label for="location" class="form-label">Nouvelle Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo htmlspecialchars($destination['location']); ?>" placeholder="Nouvelle location">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Nouveau Prix</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($destination['price']); ?>" placeholder="Nouveau prix">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
