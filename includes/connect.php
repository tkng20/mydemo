<?php
    $servername = "localhost";
    $database = "demo";
    $username = "root";
    $password = "01672362745Ngan";
// Create connection
    $connect = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
echo "Connected successfully"."<br>";
?>