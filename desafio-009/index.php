<?php require_once './utils.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $value1 = $_POST['value1'] ?? 0;
        $value2 = $_POST['value2'] ?? 0;
        $weight1 = $_POST['weight1'] ?? 1;
        $weight2 = $_POST['weight2'] ?? 1;
    ?>

    <main>
        <h2>Médias Aritméticas</h2>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="value1">1º Valor</label>
            <input type="number" name="value1" id="value1" value="<?= $value1 ?>">
            <label for="weight1">1º Peso</label>
            <input type="number" name="weight1" id="weight1" value="<?= $weight1 ?>">
            <label for="value2">2º Valor</label>
            <input type="number" name="value2" id="value2" value="<?= $value2 ?>">
            <label for="weight2">2º Peso</label>
            <input type="number" name="weight2" id="weight" value="<?= $weight2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analizando os valores <?= $value1 ?> e <?= $value2 ?>:</p>
        <ul>
            <?php 
                $result = calculateWeightedAverage($value1, $value2, $weight1, $weight2);

                echo "<li>A <strong>Média Aritmética simples</strong> entre os valores é igual a".calculateAverage($value1, $value2).".</li>";
                echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $weight1 e $weight2 é igual a $result.</li>";
            ?>
        </ul>
    </section>
</body>
</html>