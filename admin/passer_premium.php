<?php
require_once '../config/db.php';
require_once '../classes/Manager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $tourOperatorId = $_POST['id'];
    $isPremium = 1;

    $manager = new Manager($db);
    $manager->updateTourOperatorIsPremium($tourOperatorId, $isPremium);

    header('Location: index.php');
    exit;
} else {
    echo "Erreur : Données POST incorrectes.";
}
?>
