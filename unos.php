<?php require('db.php'); ?>
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
<form action="insert.php" method="post">
    Ime clana:<br>
    <input type="text" name="Ime_clana"><br>
    Prezime clana:<br>
    <input type="text" name="Prezime_clana"><br>
    oib:<br>
    <input type="text" name="oib"><br>
    uloga:<br>
    <input type="text" name="uloga"><br>
    Ime_tima:<br>
    <input type="text" name="Ime_tima"><br>
    <input type="submit" value="Unesi korisnik">
</form>
</p>

<p>
    <a href="unos.php">Unos novog clana</a>
</p>
</body>
</html>