<?php
    $connection = mysqli_connect("localhost","root","","pizzadatabase")
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email_id = $_POST["email_id"];
    $passwrord = $_POST["password"];

    $checkdata = mysqli_query($connection, "SELECT * FROM customerdetails WHERE email_id = '$email_id");
    $check = mysqli_num_row($checkdata)

    if($check > 0){
        echo "email already exists";
    }
    else{
        $input = mysqli_query($connection,)"INSERT INTO customerdetails (id, username, email_id, password) VALUES($id, $username, $email_id, $password)");
        if($input){
            echo "Signup succesful";
        }
    }
?>