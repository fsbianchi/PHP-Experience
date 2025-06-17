<?php

//Comando de incremento/decremento 
//++$a Pré-incremento  Incrementa $a em um, e então retorna $a
//$a++ Pós-incremento  Retorna $a, e então incrementa $a em um.
//--$a Pré-decremento Decrementa $a em um, e então retorna $a.
//$a   Pós-decremento Retorna $a, e então decrementa $a em um

echo "Pós-incremento ";
$a = 5;
echo "Deve ser 5: " . $a++ . "\n";
echo "Deve ser 6: " . $a . "\n";

echo "Pré-incremento";
$a = 5;
echo "Deve ser 6: " . ++$a . "\n";
echo "Deve ser 6: " . $a . "\n";

echo "Pós-decremento ";
$a = 5;
echo "Deve ser 5: " . $a-- . "\n";
echo "Deve ser 4: " . $a . "\n";

echo "Pré-decremento ";
$a = 5;
echo "Deve ser 4: " . --$a . "\n";
echo "Deve ser 4: " . $a . "\n";

?>