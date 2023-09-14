<?php
require_once "../config/db.php";
require_once "../classes/Manager.php";


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $manager = new Manager($db);
   $manager->deleteDestination($id);
    header('Location: ../admin/confirmation_suppression_destination.php');
    exit;
} else {
    echo "ID de destination invalide.";
}
?>
