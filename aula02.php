<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Aula 3</h1>
    <p><?php echo "este é um código php" ?></p>
    <p><?= 'Esse é um código php com short tag!' ?></p>
    <p>
        A soma de 1+1= <?=1+1?> <br>
        <?="Texto \n <br> Texto"?>
    </p>
    <br><br><br>

    <h1>Aula 3</h1>
    <?php
    for ($i=10; $i >= 1; $i--):
    ?>
        <p>Texto</p>
    <?php
    endfor;
    ?>

</body>
</html>