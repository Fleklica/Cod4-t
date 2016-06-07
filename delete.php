<?php require('check.php'); ?>
<?php require('db.php'); ?>
<link href="css/template.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
    <title>Cod4-tournament</title>
</head>

<body>
<h1>
    Cod4-tournament
</h1>

<p>
    <?php
    $sql = "DELETE FROM Ekipe WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    echo('Clan obrisan!<br>');
    echo('<a href="index.php">Povratak na prikaz clanova</a>');
    ?>
</p>
</body>
</html>