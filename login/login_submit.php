<?php

    include('./config/db_config.php');

    session_start();
    //hold error message
    $error = '';

    $msg = '';

    if(isset($_POST['submit'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            $error = "Username or Password is required";
        }else{
            $user =trim(stripslashes(htmlspecialchars($_POST['username']))); 
            $pass =trim(stripslashes(htmlspecialchars(md5($_POST['password'])))); 
            $query = "SELECT fullname, department, (SELECT roles from roles where id= users.role) as position FROM users WHERE username = '$user' and password = '$pass' ";

            $result = $conn->query($query);

            $row = $result->fetch_assoc();

                $_SESSION['user_name'] = $row['fullname'];
                $_SESSION['user_role'] = $row['position'];
                $_SESSION['user_department'] = $row['department'];

                if($row['position'] == "Administrator"){
                    header("location: ./admin/");
                }else if($row['position'] == "Student Assistant Dean" || $row['position'] == "Dean"){
                    header("location: ./app/");
                }else{
                    $error = "Credentials not valid";
                }

        }
        $conn->close();

    }
    
?>