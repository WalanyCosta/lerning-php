<?php require_once './utils.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salary = $_POST['salary'] ?? 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salary">Salário (kz)</label>
            <input type="number" name="salary" id="salary" step="0.01" value='<?=$salary?>'>
            <p>Considerando o salário mínimo de <strong><?=FormatCurrent(MINSALARYDEFAULT);?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>
            Quem recebe um salário de <?=FormatCurrent($salary)?> ganha <strong><?=$calculateMinimumSalary($salary)['minSalary'];?> salário(s) mínimo(s) </strong>+ <?=FormatCurrent($calculateMinimumSalary($salary)['rest']);?>.
        </p>
    </section>
</body>
</html>