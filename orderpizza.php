<?php
    $connection = mysqli_connect("localhost","root","","pizzadatabase")
    $id = $_POST["id"]
    $type = $_POST["pizza_type"];
    $topping = $_POST["pizza_topping"];
    $size = $_POST["pizza_size"];
    $number = $_POST["pizza_number"];

    $checkdata = mysqli_query($connection, "SELECT * FROM customerdetails WHERE email_id = '$email_id");
    $check = mysqli_num_row($checkdata)

        $input = mysqli_query($connection,)"INSERT INTO pizzadetails (id, pizza_type, pizza_toppings, pizza_size, pizza_number) VALUES($id, $type, $toppings, $size, $number)");
        if($input){
            echo "Order placed succesfuly";
        }else{
            echo "Try again data given is not taken by the table"
        }
    
    }
?>