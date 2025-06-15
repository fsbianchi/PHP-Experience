<?php

$nota = 3; // declarando a variável 

//estrutura condicional e operadores lógicos 
if ($nota >= 7){
    echo "Aluno(a) aprovado!"; //codigo 
 
//estrutura condicional e operadores lógicos    
} elseif (($nota < 7) && ($nota >= 5)){
    echo "Aluno(a) está em recuperação"; // codigo

//estrutura condicional e operadores lógicos
} elseif (($nota < 4) && ($nota >= 2)){
    echo "Aluno está no conselho de classe";

}else {
    echo "Aluno(a) reprovado!";// codigo
}

?>