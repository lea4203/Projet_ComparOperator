<?php
require_once "../config/db.php";
require_once "../classes/Manager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST["location"];
    $price = $_POST["price"];
    $tour_operator_id = $_POST["tour_operator_id"];


    // Créez une instance du gestionnaire (Manager) pour effectuer l'ajout de destination
    $manager = new Manager($db);

    // Vérifiez d'abord si l'ID du tour-operator existe
    if ($manager->tourOperatorExists($tour_operator_id)) {
        $manager->addAllDestination($location, $price, $tour_operator_id);

        // Redirigez l'utilisateur après l'ajout de la destination
        header("Location: ../admin/index.php");
        exit();
    }
}
?>
