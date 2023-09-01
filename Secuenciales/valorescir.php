<?php
 
 require('../encabezado.php');
 
if(isset($_GET['radio'])){
    $radio = $_GET['radio']; 
    $area = pi() * pow($radio, 2);
    $diametro = 2 * $radio;
    $circun = 2 * M_PI * $radio;

    echo "El area de la circunferencia es: $area <br><br>";

    echo "El diametro de la circunferencia es: $diametro <br><br>";

    echo "El valor de la circunferencia es: $circun <br><br>";

    echo "<br> <a href='../Index.php'>Inicio</a> <br><br>";
    
    
    
}
require('../piedepagina.php');
?>