<?php

//Relembrando a prática e o conceito de um array
// Array - É uma estrutura de dados 
//--que armazena uma coleção de elementos de tal forma que cada um possa ser identificado
//--por, pelo menos, um indece ou uma chave 


//1-exmplo
//$carros = ['Ferrari','BMW','Mercedes'];
//print_r($carros['0'])

//2-exemplo
//$endereco = [
//    'cep' => "123456789",
//    'numero'=> "12345",
//    "cidade" => "Rio de janeiro",
//    "estado" => "Rio de janeiro"
//];
//print_r($endereco['cidade'])


//3-exemplo
$enderecoPessoas = [
    'pessoa1' =>array(
        "cep" => "123456789",
        "cidade" => "Bauru"
    ),
    'pessoa2'=> [
     'cep' => "12345",
        "cidade" => "Rio de janeiro"
    
    ],

];
      print_r($enderecoPessoas['pessoa1']['cep']);
