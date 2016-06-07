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
    $sql = "UPDATE Ekipe SET Ime_clana='" . $_POST['Ime_clana'] . "', Prezime_clana='" . $_POST['Prezime_clana'] . "', uloga='" . $_POST['uloga'] . "', Ime_ekipe='" . $_POST['Ime_ekipe'] . "' WHERE id = " . $_POST['id'];
    $result = $conn->query($sql);

    header('Location: index.php');
    ?>
</p>
</body>
</html>