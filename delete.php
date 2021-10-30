<?php
$connection = mysqli_connect('localhost','root','','pizzadatabase');

$check = mysqli_query($connection, "DELETE FROM pizzadetails ORDER BY id DESC limit 1");


if($check > 0){
echo "Thank You for Ordering";
}else{
echo "Error";
}
?>