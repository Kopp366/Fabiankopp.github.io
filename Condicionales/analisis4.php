<?php
 
 require('../encabezado.php');
 
if (isset($_GET['nume1'])) {
    $numero1 = $_GET['nume1'];
    if (isset($_GET['nume2'])) {
        $numero2 = $_GET['nume2'];
        if (isset($_GET['nume3'])){
          $numero3 = $_GET['nume3'];
          
          if (isset($_GET['nume4'])) {
            $numero4 = $_GET['nume4'];

            if ($numero1 > $numero2 && $numero1 > $numero3 && $numero1 > $numero4 ) {
            echo "el numero mayor es $numero1 :)";
           }elseif ($numero2 > $numero1 && $numero2 > $numero3 && $numero2 > $numero4) {
            echo "el numero mayor es $numero2 :)";
          }elseif ($numero3 > $numero1 && $numero3 > $numero2 && $numero3 > $numero4) {
            echo "el numero mayor es $numero3";
          }else{
            echo "el numero mayor es $numero4";
          } 
         
          }

         
        }
        
    }
}
echo "<br> <a href='../Index.php'>inicio</a><br><br>";
require('../piedepagina.php');
?>