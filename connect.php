<?php

$conn = mysqli_connect("localhost", "root", "", "library");
if ($conn->connect_error) {
    die("connection failed");
    $msg = "There was an error connecting to database.";
}

?>