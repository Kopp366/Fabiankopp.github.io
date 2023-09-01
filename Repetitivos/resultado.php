<?php
 
 require('../encabezado.php');
 
if (isset($_GET['resultado'])) {
    $numero1 = $_GET['numero'];
    echo "su numero es $numero1 <br>";


 for ($i=0; $i < 10; $i++) { 
    $numero1 = ($numero1 + $i);
    echo "$numero1 <br>";
    # code...
 }

 echo "<br> <a href='../Index.php'>inicio</a><br><br>";
}
?>



