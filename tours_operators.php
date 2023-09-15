<?php

require_once 'classes/Manager.php';
require_once 'config/db.php';
$manager = new Manager($db);
$tourOperators = $manager->getAllTourOperators();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompareOperators</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>

    <main>
        <div class="col-12 bg-danger pt-5 pb-3"></div>
        <div class="col-12 bg-primary text-white pt-3 pb-3 text-center opacity-75">
            <h1 class="display-4">Découvrez toutes nos Tours Operators !</h1>
        </div>
        <div class="container pt-5 pb-3">
            <div class="row">
            <?php
            function afficherEtoiles($nombre)
                {
                    $nombre = (int)$nombre; // Convertir en entier
                    $etoiles = '';

                    for ($i = 0; $i < $nombre; $i++) {
                        $etoiles .= '⭐'; // Utilisation d'une étoile Unicode, vous pouvez également utiliser une image ou une classe CSS ici
                    }

                    return $etoiles;
                }

                    foreach ($tourOperators as $tourOperator) {

                        echo '<div class="col-lg-6 col-md-6 col-sm-12 mb-2 justify-content-center">';
                        echo '<div class="card p-1 m-3 text-align-center">';
                        echo '<p class="pt-4 opacity-75"><img src="' . $tourOperator['img'] . '" class="card-img-top" alt="' . $tourOperator['name'] . '" style="max-height: 75px"></p>';
                        echo '<div class="card-body text-align-center">';
                        echo '<h5 class="card-title text-align-center">Le tour opérateur <br><b>' . $tourOperator['name'] . '</b><br>vous propose ce voyage.</h5>';
                        echo '<h6 class="card-title text-align-center"><b>' . afficherEtoiles($tourOperator['grade_count']) . '</b></h6>';
                        echo '<button type="button" class="btn btn-sm btn-outline-danger"><a href="' . $tourOperator['link'] . '" target="_blank">Site du Tour Opérateur</a></button>';
                        echo '</div>';
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