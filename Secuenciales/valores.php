<?php
 
 require('../encabezado.php');
 
if (isset($_GET['base'])) {
    $base = $_GET['base'];  

    if (isset($_GET['altura'])) {
        $altura = $_GET['altura'];
        $area = ($altura * $base) /2 ;
        echo "El area del triángulo es: $area <br><br>";
    }

    if (isset($_GET['lado1'])){
        $lado1 = $_GET['lado1'];
    }

    if (isset($_GET['lado2'])){
        $lado2 = $_GET['lado2'];
        $hipotenusa = sqrt($lado1 * $lado1 + $lado2 * $lado2);

        echo "La hipotenusa del triángulo es: $hipotenusa <br><br>";

        $perimetro = ($lado1+$lado2+$hipotenusa);
        echo "El perímetro del triángulo es : $perimetro <br><br>";  
        echo " <a href='../Index.php'>Inicio</a>";
       
    }

  
    
}
 require('../piedepagina.php');

?>