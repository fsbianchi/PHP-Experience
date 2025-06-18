<?php
$frutas = ["banana","maça","pera","uva"];
$contador = count($frutas);

$i=3;
//while ($i <= $contador) {   //enquanto...
//    echo $frutas[$i] . "\n";

//    $i++;
//}//


do{
    echo $frutas[$i] . "\n";

    $i++;
}  while ($i < $contador); 
    
?>