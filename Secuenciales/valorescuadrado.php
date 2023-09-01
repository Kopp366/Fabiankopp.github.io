<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Valores de un Cuadrado</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
<?php
     
     require('../encabezado.php');
    ?>

    <form action="valorescua.php" method="get" class="contenedor">
        <h1>Valores de una Cuadrado</h1>
        <br><br>
        <p>Hallé el perímetro de un cuadrado:</p>
        <br>
        <label>Lado 1:</label>
        <input type="number" name="lado1" placeholder="Ingrese el primer lado">
        <br><br><br>
        <label>Lado 2:</label>
        <input type="number" name="lado2" placeholder="Ingrese el segundo lado">
        <br><br><br>
        <label>Lado 3:</label>
        <input type="number" name="lado3" placeholder="Ingrese el tercer lado">
        <br><br><br>
        <label>Lado 4:</label>
        <input type="number" name="lado4" placeholder="Ingrese el cuarto lado">
        <br><br><br>
        <p>Hallé el area de un cuadrado:</p>
        <br>
        <label>Lado:</label>
        <input type="number" name="lado" placeholder="Ingrese el valor del lado">
        <br><br><br>


        <button>Calcular</button>
    </form>
    <?php 
    require('../piedepagina.php');
    ?>
    
    
</body>
</html>