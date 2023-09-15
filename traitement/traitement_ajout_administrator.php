<?php
require_once "../classes/Manager.php";
require_once "../config/db.php";

$manager = new Manager($db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // Hachez le mot de passe avant de l'ajouter à la base de données
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Appelez la méthode addAdministrator pour insérer l'administrateur
        $manager->addAdministrator($username, $passwordHash);

        echo "Administrateur ajouté avec succès.";

    } catch (PDOException $e) {
        echo "Erreur SQL : " . $e->getMessage();
    }
}
?>
