<?php
    require 'dbconfig.php';

    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "User registered successfully!";
        } else{
            echo "User registration failed!!";
        }
    }