<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $grade_count = $_POST["grade_count"];
    $grade_total = $_POST["grade_total"];
    $link = $_POST["link"];

    $manager = new Manager($db);
    $manager->updateTourOperator($id, $name, $grade_count, $grade_total, $link);

    header("Location: ../admin/index.php");
    exit;
} else {
    header("Location: erreur.php");
    exit;
}
?>
