<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Factorial</title>
</head>
<body>
    <?php
    require('../encabezado.php');
    ?> 
    
    <h1>Calculadora de Factorial</h1>
    <form method="post" class="contenedor" >
        <label for="numero">Ingrese un número:</label>
        <br>
        <input type="number" name="numero" id="numero" required>
        <br>
        <br>
        <button type="submit">Calcular factorial</button>
        <br>
    </form>

    <?php
   
    function calcularFactorial($num) {
        if ($num == 0) {
            return 1;
        } else {
            return $num * calcularFactorial($num - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $factorial = calcularFactorial($numero);
        echo "<p>El factorial de $numero es: $factorial</p>";
        echo "<br> <a href='../Index.php'>inicio</a><br><br>";
        
    
    }
    require('../piedepagina.php');
    ?>
</body>
</html>