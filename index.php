<?php require('check.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cod4-tournament</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="cod4-tournament.php">Cod4-t</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Početna</a></li>
                <li class="active"><a href="o_nama.php">O stranici</a></li>
                <li class="active"><a href="registracija.php">Registracija</a></li>
                <li class="active"><a href="login.php">Odjava</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Cod4-tournament</h1>
        <p class="lead"></p>
    </div>

    <div>
        <p>
            <?php
            //echo(session_id());
            $_SESSION['info'];

            $sql = "SELECT * FROM Ekipe";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');
                echo('<tr><th>Ime clana</th><th>Prezime clana</th><th>uloga</th><th>Ime ekipe</th></tr>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row['Ime_clana'] . '</td>');
                    echo('<td>' . $row['Prezime_clana'] . '</td>');
                    echo('<td>' . $row['uloga'] . '</td>');
                    echo('<td>' . $row['Ime_ekipe'] . '</td>');
                    echo('<td>' . '<a href="delete.php?id=' . $row['id'] . '"><img src="img/delete.gif"></a>' . '</td>');
                    echo('<td>' . '<a href="edit.php?id=' . $row['id'] . '"><img src="img/edit.gif"></a>' . '</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo "Nema clanova";
            }
            $conn->close();
            ?>
        </p>
        <p>
            <a href="unos.php">Unos novog clana</a>
        </p>
    </div>

</div>


</body>
</html>
