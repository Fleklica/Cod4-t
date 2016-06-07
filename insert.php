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
    $sql = "INSERT INTO Ekipe VALUES ('" . $_POST['Ime_clana'] . "', '" . $_POST['Prezime_clana'] . "', '" . $_POST['oib'] . "', '" . $_POST['uloga'] . "', '" . $_POST['Ime_ekipe'] . "')";
    $result = $conn->query($sql);

    echo('Clan je unesen!<br>');
    echo('<a href="index.php">Povratak na prikaz clanova</a>');
    ?>
</p>
</body>
</html>