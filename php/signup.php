<?php
    include_once "config.php";
    $fname = mysqli_real_escape_string($connection, $_POST['first-name']);
    $lname = mysqli_real_escape_string($connection, $_POST['last-name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($connection, "SELECT email FROM users WHERE email = $email");
            if(mysqli_num_rows($sql) > 0){
                echo "This email already exists!";
            } else{

            }
        } else{
            echo "Invalid email!";
        }
    } else{
        echo "Inputs canoot be empty!";
    };