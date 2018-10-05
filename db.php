<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "universitas";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    //Check Connection
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
   
?>
