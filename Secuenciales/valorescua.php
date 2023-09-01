<?php 
 
 require('../encabezado.php');
 
   if (isset($_GET['lado1'])){
    $lado1 = $_GET['lado1'];
}

if (isset($_GET['lado2'])){
    $lado2 = $_GET['lado2'];
}

if (isset($_GET['lado3'])){
    $lado3 = $_GET['lado3'];
}

if (isset($_GET['lado4'])){
    $lado4 = $_GET['lado4'];
    $perimetro = ($lado1 + $lado2 + $lado3 + $lado4);

    echo "El perímero del cuadrado es: $perimetro <br><br>";
}

if (isset($_GET['lado'])){
    $lado = $_GET['lado'];
    $area = $lado * $lado; 

    echo "El area del cuadrado es: $area <br><br>";

    echo "<br><a href='../Index.php'>Inicio</a><br><br>";
}

    require('../piedepagina.php');
    

?>