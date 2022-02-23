<?php
/*$name = array(); cria um array vazio*/

$nome = array ('Joãozinho','Mariazinha', 'Aninha'); //array com valores preenchidos

// o array pode receber vários tipos de dados ao mesmo tempo

//$nome = array ('Joãozinho',1, 1.2, 'Aninha', true);

print_r($nome);

$nomes [] = ''; //aqui também cria um array vazio

var_dump($nome); //aqui imprime o tipo do dado

echo '<br>';

$sobrenome[6] = 'Silva';
$sobrenome[3] = 'Pereira';
$sobrenome[0] = 'Vianna';
var_dump($sobrenome);

echo '<br>';

echo $nome[0].$sobrenome[3];

echo '<br>';

$nome[99] = 'Huguinho';
$nome[] = 'Rafinha'; //entre na posição 100 do vetor
$nome[200] = 'Luquinhas';
$nome[] = 'Luizinho'; //entra na posição 201
$nome[0] = 'Arianinha'; //substitui o indice 0 do vetor
var_dump($nome);
echo '<br>';

$nomes = array('Pedrinho', 'Luizinho');
var_dump($nome);
echo '<br>';
$sobrenome = array('Pedrinho' => 'Silva', 'Luizinho' => 'Pereira');
var_dump($sobrenome);
echo '<br>';
$aluno = array('nome' => 'Pedrinho','sobrenome' => 'Silva');
var_dump($aluno);
echo '<br>';
echo 'Nome: '.$aluno['nome'].' '.$aluno['sobrenome'];
echo '<br>';

$alunos = array();
$alunos[] = array('nome' => 'Pedrinho', 'sobrenome' => 'Vianna');
$alunos[] = array('nome' => 'Luizinho', 'sobrenome' => 'Silva');
$alunos[] = array('nome' => 'Huguinho', 'sobrenome' => 'Carvalho');
var_dump($alunos);
echo '<br>';
