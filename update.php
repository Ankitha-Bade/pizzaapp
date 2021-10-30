<?php
$connection = mysqli_connect('localhost','root','','pizzadatabase');
$email = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($connection, "UPDATE customerdetails SET password='$password' WHERE email='$email'");


if($check > 0){
echo "Data Updated";
}else{
echo "Error";
}
?>