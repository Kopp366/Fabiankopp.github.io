<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Salario a N años</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
<?php
    require('../encabezado.php');
    ?>
    <h1>Calculadora de Salario a N años</h1>
    <form action="" method="post" class="contenedor">
        Salario inicial: <input type="number" name="salario_inicial"><br>
        Aumento anual (%): <input type="number" name="aumento_anual"><br>
        Número de años: <input type="number" name="num_anios"><br>
        <input  class="boton" type="submit" value="Calcular">
        <br>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salarioInicial = $_POST["salario_inicial"];
        $aumentoAnual = $_POST["aumento_anual"] / 100; // Convertir a decimal
        $numAnios = $_POST["num_anios"];

        $salarioFinal = $salarioInicial;
        for ($i = 1; $i <= $numAnios; $i++) {
            $salarioFinal *= (1 + $aumentoAnual);
        }

        echo "<h2>El salario después de $numAnios años será: $salarioFinal</h2>";
        echo "<br> <a href='../Index.php'>inicio</a><br><br>";
        
    
    }
    require('../piedepagina.php');
    ?>
</body>
</html>
