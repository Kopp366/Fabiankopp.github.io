<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
    <title>Valores de una Circunferencia</title>
</head>
<body>
<?php
     
     require('../encabezado.php');
    ?>


    <form action="valorescir.php" method="get" class="contenedor">
        <h1>Valores de una Circunferencia</h1>
        <br><br>
        <p>Hallé el area y el diametro de la circunferencia, además de el valor de la misma:</p>
        <br>
        <label>Radio de la circunferencia:</label>
        <input type="number" name="radio" placeholder="Ingrese el valor del radio">
        <br><br>


        <button>Calcular</button>
    </form>
    <?php 
    require('../piedepagina.php');
    ?>
    
    
</body>
</html>