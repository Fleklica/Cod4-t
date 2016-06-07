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
    Izmjena postojeceg clana
</h1>

<?php
$sql = "SELECT * FROM Ekipe WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
$tim = $result->fetch_assoc();
?>
<p>

<form action="update.php" method="post">
    Ime clana:<br>
    <input type="text" name="ime" value="<?php echo($tim['Ime_clana']); ?>"><br>
    Prezime clana:<br>
    <input type="text" name="prezime" value="<?php echo($tim['Prezime_clana']); ?>"><br>
    uloga:<br>
    <input type="text" name="prezime" value="<?php echo($tim['uloga']); ?>"><br>
    Ime ekipe:<br>
    <input type="text" name="prezime" value="<?php echo($tim['Ime_ekipe']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($tim['id']); ?>">
    <input type="submit" value="Izmjeni clan">
</form>
</p>

<p>
    <a href="unos.php">Unos novog clana</a><br>
    <a href="index.php">Povratak na prikaz clanova</a>
</p>
</body>
</html>