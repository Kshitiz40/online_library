<?php
session_start();
if($_SESSION['loggedin'] != true)
{
    header("location: 403error.php");
}

?>