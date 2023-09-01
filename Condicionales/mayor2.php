<?php
 
 require('../encabezado.php');
 
if (isset($_GET['nume1'])) {
    $numero1 = $_GET['nume1'];
    if (isset($_GET['nume2'])) {
        $numero2 = $_GET['nume2'];
        
          if ($numero1 > $numero2) {
            echo "el numero mayor es $numero1 :)";
          }
          else{
            echo "el numero mayor es $numero2 :)";
          }
          
        
    }
}
echo "<br> <a href='../Index.php'>inicio</a><br><br>";
require('../piedepagina.php');
?>