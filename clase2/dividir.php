<?php
//variables
$n1 = 0; $n2 = 0; $s = 0;

//Entradas
if(isset($_POST["btncalcular"])){

    $n1 = (double)$_POST["txtn1"];
    $n2 = (double)$_POST["txtn2"];

    //salida
    $s = $n1 / $n2;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
    
</head>
<body>
    
    <form action="dividir.php" method="post">
       <table width="400" border=0>
          <tr>
             <td>Calculo de la division de dos numeros</td>
         </tr>
          <tr>
               <td>Numero 1</td>
                <td><input name="txtn1" type="text" id="txtn1" value="<?=$n1?>"></td>
            </tr>

           <tr>
              <td>Numero 2</td>
              <td><input name="txtn2" type="text" id="txtn2" value="<?=$n2?>"></td>
          </tr>

         <tr>
              <td>Dividir</td>
              <td><input name="txts" type="text" id="txts" value="<?=$s?>"></td>
          </tr>

          <tr>
              <td></td>
                <td><input name="btncalcular" type="submit" id="btncalcular" value="calcular"></td>
            </tr>
        </table>
    </form>




</body>
</html>