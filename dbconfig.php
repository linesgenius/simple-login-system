<?php
    $username = "root";
    $server = "localhost";
    $password = "";
    $db = "loginsystem";

    $conn = mysqli_connect($server, $username, $password, $db);
    if(!$conn){
        die("Connection failed! " . mysqli_connect_error());
    }