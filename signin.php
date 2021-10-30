<?php
    $connection = mysqli_connect()"localhost","root","","pizzadatabase")
    $username = $_POST["username"];
    $password = $_POST["password"];

    $checkdata = mysqli_query($connection,"SELECT * FROM customerdetails WHERE username = '$username' AND password = '$_password'");
    $check = mysqli_num_row($checkdata);

    if($check>0){
        echo "Signin Succesful";
    }
    else{
        echo "Signin Failed";
    }
?>