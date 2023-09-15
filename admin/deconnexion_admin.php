<?php
// Inclure les fichiers nécessaires et initialiser la session
require_once "../classes/Manager.php";
require_once "../config/db.php";
session_start();

// Détruire la session de l'administrateur
session_destroy();

// Rediriger vers la page de connexion après la déconnexion
header("Location: login_administrator.php");
exit();
?>
