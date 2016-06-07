<?php require('db.php'); ?>
<link href="css/template.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
    <title>Check</title>
</head>

<body>
<h1>
    Check
</h1>

<p>
    <?php
    $sql = "SELECT * FROM users WHERE username= '" . $_POST['username'] . "' AND password= '" . $_POST['password'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        header('Location:index.php');
    }
    else
    {
        header('Location:login.php?login=fail');
    }

   
    
    ?>
</p>
</body>
</html>