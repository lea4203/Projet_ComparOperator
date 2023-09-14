<?php

require_once 'classes/Manager.php';
require_once 'config/db.php';
$manager = new Manager($db);
$tourOperatorId = isset($_POST['tour_operator_id']) ? $_POST['tour_operator_id'] : null;
$tourOperatorData = $manager->getHomeTourOperator($tourOperatorId);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompareOperators</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>

    <main>
        <div class="col-12 bg-danger pt-5 pb-3"></div>
        <div class="col-12 bg-success text-white pt-3 pb-3 text-center opacity-75"><h1 class="display-4">Découvrez toutes nos destinations !</h1></div>
        <div class="container pt-5 pb-3">
            <div class="row">
                <?php
                   
                    function afficherEtoiles($nombre) {
                        $nombre = (int)$nombre; // Convertir en entier
                        $etoiles = '';
                    
                        for ($i = 0; $i < $nombre; $i++) {
                            $etoiles .= '⭐'; // Utilisation d'une étoile Unicode, vous pouvez également utiliser une image ou une classe CSS ici
                        }
                    
                        return $etoiles;
                    }

    foreach ($tourOperatorData as $tourOperator) {
        echo '<div class="col-lg-3 col-md-6 col-sm-12 mb-3">'; // Utilisez les classes de colonnes Bootstrap
                    echo '<div class="card">';
                    echo '<img src="images/bkg-travel-header.jpg" class="card-img-top" alt="...">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Le tour opérateur <b>' . $tourOperator['name'] . '</b> propose ce voyage.</h5>';
                    echo '<h6 class="card-title"><b>' . afficherEtoiles($tourOperator['grade_count']) . '</b></h6>';
                    echo '<p class="card-text"><a href="' . $tourOperator['link'] . '" target="_blank">Site du Tour Opérateur</a></p>';                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <script src="js/scripts.js"></script>
    </main>

    <footer class="bg-success opacity-75" id="contact">
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>