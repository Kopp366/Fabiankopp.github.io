<!DOCTYPE html>
<html>
<head>
    <title>Suma de 10 números</title>
    <link rel="stylesheet" type="text/css" href="https://localhost/sumar10primerosenteros/css/suma10numeros.css" />
    <link   rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
    <?php
    require('../encabezado.php');
    ?>

    <h1 style="text-align: center;">Calculadora de suma de 10 números</h1>
    <form action="" method="post" class="contenedor">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Número $i: <input type='number' name='numero$i'><br><br>";
        }
        ?>
        <input class="boton" type="submit" value="Calcular suma"><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sum = 0;

        for ($i = 1; $i <= 10; $i++) {
            $inputName = "numero$i";
            if (isset($_POST[$inputName])) {
                $num = $_POST[$inputName];
                $sum += $num;
            }
        }

        echo "<h2>La suma de los números ingresados es: $sum</h2>";
        echo "<br> <a href='../Index.php'>inicio</a><br><br>";
        
    
    }
    require('../piedepagina.php');
    ?>
</body>
</html>
