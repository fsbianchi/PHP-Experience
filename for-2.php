<?php
//Estudos sobre FOR parte 2
//
$arr = [0,3,5,1];

$qtda_elementos_array = count($arr); // 4 -1 // 3

// $i=1
// $posicaoAtual = 0

for ($i=0; $i <$qtda_elementos_array -1; $i++){
    for ($posicaoAtual=0; $posicaoAtual < $qtda_elementos_array -$i -1; $posicaoAtual++) { 
        
        $ProximaPosicao = $posicaoAtual+1; // 3 

        if ($arr[$ProximaPosicao] < $arr[$posicaoAtual]) {
        
            $auxiliar = $arr[$posicaoAtual]; //5
            $arr[$posicaoAtual] = $arr[$ProximaPosicao];
            $arr[$ProximaPosicao] = $auxiliar;
        }
    }
}
print_r($arr) . "\n";