<?php

require_once 'classes/Manager.php';
require_once 'config/db.php';
$manager = new Manager($db);
$destinations = $manager->getHomeDestination();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompareOperators</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>

    <main>
        <div class="col-12 bg-secondary pt-5 pb-3"></div>
        <div class="container pt-5 pb-3">
            <div class="row">
                <?php
                foreach ($destinations as $destination) {
                    echo '<div class="col-lg-3 col-md-6 col-sm-12 mb-3">'; // Utilisez les classes de colonnes Bootstrap
                    echo '<div class="card">';
                    echo '<img src="images/bkg-travel-header.jpg" class="card-img-top" alt="...">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title"><b>' . $destination['location'] . '</b></h5>';
                    echo '<p class="card-text">A partir de : ' . $destination['price'] . ' €</p>';
                    // echo '<p class="card-text">A partir de ...</p>';
                    echo '<a href="#" class="btn btn-danger">Partez maintenant !</a>';
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

    <footer id="contact">
        <?php include('footer.php'); ?>
    </footer>
</body>

</html>