<link href="css/template.css" rel="stylesheet">

<?php
session_start();

if(!isset($_SESSION['id']))
{
    header('Location:login.php');
    die();
}

?>