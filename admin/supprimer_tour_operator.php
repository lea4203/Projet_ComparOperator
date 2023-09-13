<?php
require_once "../config/db.php";
require_once "../classes/Manager.php";

if (isset($_POST['id'])) {
    $tourOperatorID = $_POST['id'];

    $manager = new Manager($db);

    $destinations = $manager->getDestinationsByTourOperator($tourOperatorID);

    if (!empty($destinations)) {
        foreach ($destinations as $destination) {
            $manager->deleteDestination($destination['id']);
        }
    }

    $manager->deleteTourOperator($tourOperatorID);

    header("Location: confirmation_suppression.php");
    exit;
} else {
    header("Location: erreur.php");
    exit;
}


?>
