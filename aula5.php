<?php

$vetor = array(1,12,45,98,13,456,74,34);
echo count($vetor);
echo "<br>";
print_r($vetor);

echo "Array como Pilha <br>";
$valor = array_pop($vetor);
echo "<br>";
print_r($valor);
echo "<br>";
echo $valor;
echo "<br>";

echo "Array como Pilha <br>";
$valor = array_push($vetor,'1000');
echo "<br>";
print_r($valor);
echo "<br>";
echo $valor;
echo "<br>";

echo in_array(98, $vetor);
echo "<br>";

echo array_search(98, $vetor);
echo "<br>";

var_dump(array_reverse($vetor));
echo "<br>";

sort($vetor);
var_dump ($vetor);
echo "<br>";

rsort($vetor);
var_dump ($vetor);
echo "<br>";

shuffle($vetor);
var_dump ($vetor);
echo "<br>";

ksort($vetor);
var_dump ($vetor);
echo "<br>";


foreach ($vetor as $valor){
    echo "<p> $valor </p>";
} 

$vetor2 = array('nome'=>'Jósé', 'sobrenome' => 'Silva', 'matricula' => 123, 'nascimento' => '21/11/1985');
foreach ($vetor2 as $chave => $valor2){
    echo "<p> $chave:$valor2 </p>";
} 



?>