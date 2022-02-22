<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boas Vindas!</h1>
    <?php
        /*$nome = "João";
        $aluno = $nome;  Mesma coisa que $aluno = "João";
        $nome = "Silva";
        echo "<p> Bem Vindo, $nome, $aluno </p> \n";*/

        /*$nome = "João";
        $aluno = &$nome;  Agora, &$aluno aponta para o espaço de memória onde está o $nome e é substituido
        $nome = "Silva";
        echo "<p> Bem Vindo, $nome, $aluno </p> \n";*/

        $nome = "João";
        echo "Nome: $nome \n <br>"; //aqui interpreta a váriaval
        echo 'Nome: $nome', "\n <br>"; //aqui não interpreta a variável
        echo 'Nome: ', $nome, "\n <br>";

        echo gettype($nome), "<br>"; //identifica o tipo da variável

        /*$nome = "João";
        $nome = 10; aceita isso, precisa ter CUIDADO!!!*/

        $nome = "10";
        $total = $nome + 10; //transforma a sting "10" em um inteiro e soma
        echo gettype($total), "\n <br>";
        echo "<p> Total: $total </p> \n <br>";

        $nome = (int) "10";
        echo gettype($nome), "\n <br>";

        $var = 10%2;
        echo $var. "\n <br>";
        
        $a = 3;
        $b = $a++; //pós incremento, vai imprimir primeiro e depois somar
        echo $b , "\n <br>"; // aqui imprime 3
        
        $a = 3;
        $b = ++$a; //pré incremento, vai somar primeiro e depois imprimir
        echo $b , "\n <br>"; // aqui imprime 4

        $a = 3;
        $b ="3";
        echo $a == $b, "\n <br>"; // aqui retorna true

        $a = 3;
        $b ="3";
        echo $a === $b, "\n <br>"; // aqui retorna false, porque o tipo da variável é diferente

        for ($i=1; $i <= 20; $i++) { 
            $j = $i*$i;
            echo "O quadrado de $i é $j \n <br>";
        }

    ?>
</body>
</html>