<?php require_once './utils.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $number = $_REQUEST['number'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="number">Número</label>
            <input type="number" name="number" id="number" step="0.01">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <p>Analizando o <strong>número <?=$number;?></strong>, temos:</p>
        <ul>
           <li>A sua raiz quadrado é <strong><?=calculateSquareAndCube($number)['square'];?></strong></li>
           <li>A sua raiz cúbica é <strong><?=calculateSquareAndCube($number)['cube'];?></strong></li>
        </ul>
    </section>
</body>
</html>