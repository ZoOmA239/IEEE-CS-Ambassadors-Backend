<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Demo</title>
</head>

<body>
     <?php
     // Method 1
     $greeting = "Hello";
     $target = "World!";
     echo $greeting . " " . $target . "<br>";
     ?>

     <?php
     // Method 2
     $greeting = "Hello";
     echo $greeting . " World!" . "<br>";
     ?>

     <?php
     // Method 3
     $greeting = "Hello";
     echo "$greeting World!" . "<br>";
     ?>
     <?php
     // Method 4
     $greeting = "Hello";
     echo $greeting . " " . "World!";
     ?>
</body>

</html>