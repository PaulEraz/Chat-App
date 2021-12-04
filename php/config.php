<?php
$connection = mysqli_connect("localhost", "root", "", "chat-app");
if(!$connection){
    echo "Database not connected" . mysqli_connect_error();
}