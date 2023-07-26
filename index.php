<?php
//variables
$n1 = 0; $n2 = 0; $s = 0;

//Entradas
if(isset($_POST["btncalcular"])){

    $n1 = (double)$_POST["txtn1"];
    $n2 = (double)$_POST["txtn2"];

    //salida
    $s = $n1 + $n2;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
<link rel="stylesheet" href="suma.php">
<link rel="stylesheet" href="resta.php">
<link rel="stylesheet" href="multiplicar.php">
<link rel="stylesheet" href="dividir.php">
</head>
<body>
    
 <table border =10>
    <tr>
        
        <td><button onclick="location.href='suma.php'">sumar</button></td>
    </tr>
    <tr>
        
        <td><button onclick="location.href='resta.php'">restar</button></td>
    </tr>
    <tr>
        
        <td><button onclick="location.href='multiplicar.php'">multiplicar</button></td>
    </tr>
    <tr>   
    
        <td><button onclick="location.href='dividir.php'">dividir</button></td>
    </tr>
 </table>
</body>
</html>