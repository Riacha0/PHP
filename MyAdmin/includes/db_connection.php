<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myadmin_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){

    die("Database Connection Failed.");

}

?>