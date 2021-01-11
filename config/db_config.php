<?php

    $servername = "localhost";
    $username = "root";
    $password = "GodIsGood";
    $db_name = "mydormapp";


    //create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    
    //check connection
    if($conn->connect_error){
        die("connection failed: ". $conn->connect_error);
    }
?>