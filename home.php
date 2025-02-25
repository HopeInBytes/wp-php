<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>

<body>
    <?php
    $name = "Patrick";
    $age = 30;
    $price = 10.56;
    $is_admin = true;
    $title = "Learn code with harry";
    $person1 = array("name=>pratiksha", "age=>25", "gender=>female");
    $fruits = array("apple", "banana", "orange");
    $person = ["name" => "Alice", "age" => 25];
    $colors = ["red", "blue", "green"];
    
    ?>
    <p><?php echo "First Fruits:" . $fruits[2]; ?></p>

    <h4>
        <p>Name: <?php echo "$name"; ?></p>
        <p>Age: <?php echo "$age"; ?></p>
        <p>Price: <?php echo "$price"; ?></p>
        <p>Admin:<?php echo "$is_admin"; ?></p>
    </h4>
    <h4><?php echo "Lets begin | "  . $title; ?></h4>
    <p><?php echo "the login person is  " . $person["name"]; ?></p>
    <!-- for loop -->
     <?php 
     foreach($colors as $color){
        echo "color: $color <br>";
     }

     for($i=0; $i<=10; $i++){
        echo "print : $i <br>";
     }
     ?>
 
 <?php 
 function greet($name){
    return "Hello, $name!";
 }
 echo greet("Pratiksha");

 function sum($num1, $num2){
    return $num1 + $num2;
 }
 echo sum(3, 6);
 ?>


</body>

</html>