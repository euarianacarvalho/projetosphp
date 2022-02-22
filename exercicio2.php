<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Um Elefante Incomoda Muita Gente</h1>
    <?php
    for ($i=1; $i <= 10; $i++):
    ?>
    <?php
        if(($i %2) == 1):
    ?>
            <p><?=$i?> elefante incomoda muita gente</p>
        
        <?php
            else:
        ?>
            <p><?= $i ?> elefantes incomodam muito mais </p>

        <?php  
        endif;
        ?> 
    <?php
    endfor;
    ?>
</body>
</html>