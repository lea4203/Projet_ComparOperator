
<?php
require_once "../classes/Manager.php";
require_once "../classes/Destination.php";
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST["location"];
    $price = $_POST["price"];

    $manager = new Manager($db);
    $destination = new Destination();

    $destination->setLocation($location);
    $destination->setPrice($price);

    $manager->addAllDestination($destination);
}
?>

