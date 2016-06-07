<?php require('db.php'); ?>
<link href="css/template.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
    <title>Cod4-tournament</title>
</head>

<body>
<h1>
    Unos novog clana
</h1>

<p>
<form action="insert.php" method="post">
    Ime clana:<br>
    <input type="text" name="Ime_clana"><br>
    Prezime clana:<br>
    <input type="text" name="Prezime_clana"><br>
    uloga:<br>
    <input type="text" name="uloga"><br>
    Ime_tima:<br>
    <input type="text" name="Ime_tima"><br>
    <input type="submit" value="Unesi clana">
</form>
<a href="index.php">Povratak na prikaz clanova</a>
</p>


</body>
</html>