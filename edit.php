<?php require('check.php'); ?>
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

<?php
$sql = "SELECT * FROM Ekipe WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
$auto = $result->fetch_assoc();
?>
<p>

<form action="update.php" method="post">
    Ime clana:<br>
    <input type="text" name="ime" value="<?php echo($auto['Ime_clana']); ?>"><br>
    Prezime clana:<br>
    <input type="text" name="prezime" value="<?php echo($auto['Prezime_clana']); ?>"><br>
    oib:<br>
    <input type="text" name="prezime" value="<?php echo($auto['oib']); ?>"><br>
    uloga:<br>
    <input type="text" name="prezime" value="<?php echo($auto['uloga']); ?>"><br>
    Ime ekipe:<br>
    <input type="text" name="prezime" value="<?php echo($auto['Ime_ekipe']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($auto['id']); ?>">
    <input type="submit" value="Izmjeni clan">
</form>
</p>

<p>
    <a href="unos.php">Unos novog clana</a>
</p>
</body>
</html>