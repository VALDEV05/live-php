<?php 
/* Stampare una stringa verde se la variabile password passata in GET è uguale a "Boolean", altrimenti stampare una stringa rossa. */


$password = $_GET['password'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color-string</title>
    <style>
        .green{
            color:green;
        }
        .red{
            color:red;
        }
    </style>
</head>
<body>
    <h1 class="<?php echo $password == 'boolean' ? 'green' : 'red'?>">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, saepe earum, ipsam in a magnam alias optio dolores at totam laboriosam ex, dolorem temporibus nihil. Incidunt deleniti velit veniam suscipit?
    </h1>
</body>
</html>