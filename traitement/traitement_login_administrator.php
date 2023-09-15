<?php
// Incluez les fichiers nécessaires et initialisez la session
require_once "../classes/Manager.php";
require_once "../config/db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifiez si les champs sont vides (ajoutez d'autres validations si nécessaire)
    if (empty($username) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        try {
            // Créez une instance de Manager et définissez le mode d'erreur PDO
            $manager = new Manager($db);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Obtenez les données de l'administrateur
            $admin = $manager->getAllAdministrator($username);

            if ($admin && password_verify($password, $admin["password"])) {
                // Stockez les informations de l'administrateur dans la session
                $_SESSION["admin_id"] = $admin["id"];
                $_SESSION["admin_username"] = $admin["username"];

                header("Location: ../admin/index.php");
                exit();
            } else {
                echo "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            echo "Erreur SQL : " . $e->getMessage();
        }
    }
}
?>
