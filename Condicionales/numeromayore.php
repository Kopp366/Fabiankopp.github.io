<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
    <title>Document</title>
</head>
<body>

    <?php
     
    require('../encabezado.php');
   ?>

    <form action="numeromayor.php" method="get" class="contenedor">
        <p>ingrese tres numeros para identificar el mayor</p>
        <input type="number" name="nume2">
        <input type="number" name="nume1">
        <input type="number" name="nume3">
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