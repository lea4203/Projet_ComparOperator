<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $location = $_POST["location"];
    $price = $_POST["price"];

    $manager = new Manager($db);
    $manager->updateDestination($id, $location, $price);

    echo "Destination mise à jour avec succès.";
} else {
    header("Location: admin/index.php");
    exit;
}
?>
