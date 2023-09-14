<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["grade_count"]) && isset($_POST["grade_total"]) && isset($_POST["link"])) {
        $name = $_POST["name"];
        $grade_count = $_POST["grade_count"];
        $grade_total = $_POST["grade_total"];
        $link = $_POST["link"]; 

        $manager = new Manager($db);
        $manager->addAllTourOperator($name,$grade_count,$grade_total,$link);
    } else {
        echo "Veuillez compléter le formulaire pour ajouter un tour opérateur.";
    }
    header('Location: ../admin/index.php');
    exit();
}