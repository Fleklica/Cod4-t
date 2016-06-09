<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cod4-t</title>
</head>

<body>
<h1>
    Cod4-t
</h1>

<p>
    <?php
    $sql = "INSERT INTO users (Ime, Prezime, username, password) VALUES ('" . htmlspecialchars($_POST['name']) . "', '" . htmlspecialchars($_POST['surname']) . "', '" . htmlspecialchars($_POST['username']) . "', '" . htmlspecialchars($_POST['password']) . "')";
    $result = $conn->query($sql);
    echo($sql);
    echo('Hvala na registraciji!<br>');
    echo('<a href="index.php">Povratak na pocetnu stranicu!</a>');
    ?>
</p>
</body>
</html>