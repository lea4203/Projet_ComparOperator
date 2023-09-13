<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["location"]) && isset($_POST["price"]) && isset($_POST["tour_operator_id"])) {
        $location = $_POST["location"];
        $price = $_POST["price"];
        $tour_operator_id = $_POST["tour_operator_id"]; 

        $manager = new Manager($db);
        $manager->addAllDestination($location,$price,$tour_operator_id);
    } else {
        echo "Les données de localisation (location) et de prix (price) sont requises.";
    } 
    header('Location: ../admin/index.php');
    exit();

}
?>
