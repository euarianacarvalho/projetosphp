<?php

    //FORMULÁRIOS


    /*get: todas as requisição são enviadas no cabeçalho da requisição - aparece na url os dados solicitados
    post: primeiro ele faz a conexão, o servidor devolve se está ok e depois envia os dados que está solicitando - não aparece na url os dados */

    echo 'POST: ';
    var_dump($_POST);
    echo '<br>';
    echo 'GET: ';
    var_dump($_GET);
    echo '<br>';

    echo 'O nome do usuário é: '.$_GET['nome'];
    echo '<br>';
    echo 'O sobrenome do usuário é: '.$_GET['sobrenome'];
    echo '<br>';
    echo 'O outro nome do usuário é: '.$_POST['outroNome'];
    echo '<br>';


?>