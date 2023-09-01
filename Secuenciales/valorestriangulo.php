<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Valores de un Triángulo</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
    <?php
     
     require('../encabezado.php');
    ?>
  
    <form action="valores.php" method="get" class="contenedor">
        <h1>Valores de un Triángulo</h1>
        <br><br>
        <p>Hallé el área de un triángulo</p>
        <br>
        <label>Base:</label>
        <input type="number" name="base">
        <br><br><br>
        <label>Altura:</label>
        <input type="number" name="altura">
        <br><br>
        <p>Hallé la hipotenusa y el perímetro de un triángulo</p>
        <br>
        <label>Lado 1:</label>
        <input type="number" name="lado1" placeholder="Ingrese el primer cateto">
        <br><br><br>
        <label>Lado 2:</label>
        <input type="number" name="lado2" placeholder="Ingrese el segundo cateto">
        <br><br><br>

        <button>Calcular</button>
    </form>
    <?php 
    require('../piedepagina.php');
    ?>
    
</body>
</html>