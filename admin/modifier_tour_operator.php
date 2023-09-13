<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../traitement/traitement_update_tour_operator.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $tourOperator['id'] ?>">
        <input type="text" name="name" value="<?php echo $tourOperator['name'] ?>">
        <input type="text" name="grade_count" value="<?php echo $tourOperator['grade_count'] ?>">
        <input type="text" name="grade_total" value="<?php echo $tourOperator['grade_total'] ?>">
        <input type="text" name="link" value="<?php echo $tourOperator['link'] ?>">
        <input type="submit" value="Modifier">

    </form>
</body>
</html>