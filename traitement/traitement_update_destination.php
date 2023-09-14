<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $location = $_POST["location"];
    $price = $_POST["price"];

    $manager = new Manager($db);
    $manager->updateDestination($id, $location, $price);

    
} else {
    // Utilisez la redirection pour renvoyer à la page d'accueil
    header("Location: ../admin/index.php");
    exit; // Assurez-vous d'ajouter exit() après header() pour terminer l'exécution du script
}
?>
