<?php
$dbConnection = mysqli_connect("localhost", "root", "", "company");

if ($dbConnection == false) {
    die("DB connection failed: " . mysqli_connect_error());
}
?>