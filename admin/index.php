<?php
require_once '../classes/Manager.php';
require_once '../config/db.php';
$manager = new Manager($db);
$destinations = $manager->getAllDestination();
$tourOperators = $manager->getAllTourOperator();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Liste des Destinations</title>
</head>

<body>

    <div class="container mt-5">
        <h1>Liste des Destinations</h1>

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
                                <button type="submit" class="btn custom-primary-btn btn-sm">Modifier</button>
                            </form>
                            <form action="supprimer_destination.php" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $destination['id']; ?>">
                                <button type="submit" class="btn custom-danger-btn btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="form_ajout_destination.php" class="btn btn-primary" style="color: #051c55">Ajouter une destination</a>
    </div>

    <div class="container mt-5">
        <h1>Liste des Tour Operators</h1>

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
                            <form action="supprimer_tour_operator.php" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $tourOperator['id']; ?>">
                                <button type="submit" class="btn custom-danger-btn btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="form_ajout_tour_operator.php" class="btn btn-primary" style="color: #051c55">Ajouter une Tour Opérateur</a>
</body>

</html>
