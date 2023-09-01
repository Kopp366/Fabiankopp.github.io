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


    <form action="analisis4.php" method="get" class="contenedor">
        <p>ingrese los numero para identificar cual es mayor</p><br>
        <input type="number" name="nume2">
        <input type="number" name="nume1">
        <input type="number" name="nume3">
        <input type="number" name="nume4">
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