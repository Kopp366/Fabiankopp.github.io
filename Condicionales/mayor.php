<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
<?php
     
     require('../encabezado.php');
    ?>
    <form action="mayor2.php" method="get" class="contenedor">
        <P>Ingrese dos numeros para identificar el mayor</P>
        <input type="number" name="nume2">
        <input type="number" name="nume1">
        <br>
        <br>
        <button>cual es mayor?</button>
        <br>
    </form>
    <?php 
    require('../piedepagina.php');
    ?>
    
    
</body>
</html>