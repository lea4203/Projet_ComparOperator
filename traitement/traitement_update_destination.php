<?php
require_once '../classes/Manager.php';
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $manager = new Manager($db);
    $location = $_POST["location"];
    $price = $_POST["price"];
    $destinationId = $_POST["id"];
    $tourOperatorID = $_POST["tour_operator_id"];

    $manager->updateDestination($destinationId, $location, $price, $tourOperatorID);

    ob_start();
    
    header("Location: ../admin/index.php");
    exit;
}
?>

