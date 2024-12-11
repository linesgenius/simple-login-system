<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    echo "welcome $user!";
} else{
    echo "welcome user!";
}
 
 