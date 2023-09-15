<?php

require_once '../classes/Manager.php';
require_once '../config/db.php';
session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: login_administrator.php");
    exit();
}

$manager = new Manager($db);
$destinations = $manager->getAllDestination();
$tourOperators = $manager->getAllTourOperator();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Destinations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('header.php'); ?>

    <div class="container mt-5">
        <h1>Liste des Destinations</h1>

        <h4 class="mt-3">Connecté en tant qu'administrateur :
            <?php echo $_SESSION["admin_username"]; ?>
        </h4>
        <a href="deconnexion_admin.php" class="btn btn-danger">Se déconnecter</a>

        <div class="pt-4 pb-1 m-3 bg-secondary text-white text-center opacity-50">
            <h2>Gestion du site</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 pb-3 border-bottom border-secondary">
                    <h3>Liste des Destinations</h3>
                    <table class="table table-bordered">



                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Location</th>
                                    <th>Prix</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($destinations as $destination): ?>
                                    <tr>
                                        <td>
                                            <?php echo $destination['location']; ?>
                                        </td>
                                        <td>
                                            <?php echo $destination['price']; ?>
                                        </td>
                                        <td>
                                            <form action="modifier_destination.php" method="get" style="display: inline;">
                                                <input type="hidden" name="id" value="<?php echo $destination['id']; ?>">
                                                <button type="submit"
                                                    class="btn custom-primary-btn btn-sm">Modifier</button>

                                            </form>
                                            <form action="supprimer_destination.php" method="get" style="display: inline;">
                                                <input type="hidden" name="id" value="<?php echo $destination['id']; ?>">
                                                <button type="submit"
                                                    class="btn custom-danger-btn btn-sm">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <a href="form_ajout_destination.php" class="btn btn-primary text-white"
                            style="color: #051c55">Ajouter une
                            destination</a>
                </div>
                <div class="col-lg-4 col-md-12 pb-3 border-bottom border-secondary">
                    <h3>Liste des Tours Operators</h3>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nom du tour operator</th>
                                <th>Grade</th>
                                <th>Grade total</th>
                                <th>Lien</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tourOperators as $tourOperator): ?>
                                <tr>
                                    <td>
                                        <?php echo $tourOperator['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $tourOperator['grade_count']; ?>
                                    </td>
                                    <td>
                                        <?php echo $tourOperator['grade_total']; ?>
                                    </td>
                                    <td>
                                        <?php echo $tourOperator['link']; ?>
                                    </td>
                                    <td>
                                        <form action="modifier_tour_operator.php" method="get" style="display: inline;">
                                            <input type="hidden" name="id" value="<?php echo $tourOperator['id']; ?>">
                                            <button type="submit" class="btn custom-primary-btn btn-sm">Modifier</button>
                                        </form>
                                        <br>
                                        <br>
                                        <form action="supprimer_tour_operator.php" method="post" style="display: inline;">
                                            <input type="hidden" name="id" value="<?php echo $tourOperator['id']; ?>">
                                            <button type="submit" class="btn custom-danger-btn btn-sm">Supprimer</button>
                                        </form>
                                        <br>
                                        <br>
                                        <?php if ($tourOperator['is_premium'] == 0): ?>
                                            <form action="passer_premium.php" method="post" style="display: inline;">
                                                <input type="hidden" name="id" value="<?php echo $tourOperator['id']; ?>">
                                                <button type="submit" class="btn custom-success-btn btn-sm">Passer en mode
                                                    Premium</button>
                                            </form>

                                        <?php else: ?>
                                            <i class="fas fa-star text-warning"></i>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="form_ajout_tour_operator.php" class="btn btn-primary text-white"
                        style="color: #051c55">Ajouter une
                        Tour Opérateur</a>
                </div>

</body>

</html>