<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "maha_trip";
// create a database connection
$con = mysqli_connect($server, $username, $password, $database);
// cheak for connection succes

if(!$con){
    die("Connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";
?>