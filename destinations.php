<?php

require_once 'classes/Manager.php';
require_once 'config/db.php';
$manager = new Manager($db);

$location = isset($_POST['location']) ? $_POST['location'] : null;
// var_dump($location);

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

        <div class="container col-12 pt-5 pb-3 align-item-center">
            <div class="row">
            <div class="col-lg-4 col-md-12">
            <?php
                if ($location) {
                    $destinations = $manager->getDestinationByLocation($location);

                    foreach ($destinations as $destination) {
                        echo '<div class="card m-3">';
                        echo '<div class="card-body">';
                        echo '<h1 class="display-3 text-secondary">Destination</h1>';
                        echo '<h1 class="display-1 text-danger"><b>' . $destination['location'] . '</b></h1>';
                        echo '<img src="images/logo.png" class="card-img-top" alt="logo">';
                        echo '<img src="' . $destination['img'] . '" class="card-img-top" alt="' . $destination['location'] . '">';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Aucune destination trouvée pour cette recherche.";
                }
                ?>
            </div>
            <div class="col-lg-8 col-md-12 d-flex flex-wrap">
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

                if ($location) {
                    $tourOperators = $manager->getTourOperatorByLocation($location);

                    foreach ($tourOperators as $tourOperator) {

                        echo '<div class="col-6 col-md-12 col-sm-12 mb-2">';
                        echo '<div class="card p-1 m-3">';
                        echo '<p class="pt-4 opacity-75"><img src="' . $tourOperator['img'] . '" class="card-img-top" alt="' . $tourOperator['name'] . '" style="max-height: 75px"></p>';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">Le tour opérateur <br><b>' . $tourOperator['name'] . '</b><br>vous propose ce voyage.</h5>';
                        echo '<h6 class="card-title"><b>' . afficherEtoiles($tourOperator['grade_count']) . '</b></h6>';
                        echo '<button type="button" class="btn btn-sm btn-outline-danger"><a href="' . $tourOperator['link'] . '" target="_blank">Site du Tour Opérateur</a></button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Aucun tour-opérateur trouvé pour cette destination.";
                }

                ?>
            </div>
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