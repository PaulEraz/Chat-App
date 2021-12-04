<?php
    include_once "config.php";
    $fname = mysqli_real_escape_string($connection, $_POST['first-name']);
    $lname = mysqli_real_escape_string($connection, $_POST['last-name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        
    } else{
        echo "Inputs canoot be empty!";
    };