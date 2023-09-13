<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

$tourOperator = null;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $manager = new Manager($db);
    
    $tourOperator = $manager->getTourOperator($id);
    
    if (!$tourOperator) {
        echo "Tour Operator non trouvé.";
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à Jour du Tour Operator</title>
    <!-- Ajout de Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Mise à Jour du Tour Operator</h1>
        <form action="../traitement/traitement_update_tour_operator.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $tourOperator['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nom du tour operator</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $tourOperator['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="grade_count" class="form-label">Note Global</label>
                <input type="text" class="form-control" id="grade_count" name="grade_count" value="<?php echo $tourOperator['grade_count']; ?>">
            </div>
            <div class="mb-3">
                <label for="grade_total" class="form-label">Note Total</label>
                <input type="text" class="form-control" id="grade_total" name="grade_total" value="<?php echo $tourOperator['grade_total']; ?>">
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Lien</label>
                <input type="text" class="form-control" id="link" name="link" value="<?php echo $tourOperator['link']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à Jour</button>
        </form>
    </div>

    <!-- Ajout de Bootstrap JS (pour le fonctionnement des composants Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
