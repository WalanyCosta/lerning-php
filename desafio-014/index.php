<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio014</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $number = $_POST['number'] ?? 0;
        $number2 = $_POST['number2'] ?? 0;
        $number3 = $_POST['number3'] ?? 0;
    ?>
    <main>
        <h2>descrescente de número</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="number">Digite 1º número</label>
            <input type="number" name="number" id="number" required>
            <label for="number2">Digite 2º número</label>
            <input type="number" name="number2" id="number2" required>
            <label for="number3">Digite 3º número</label>
            <input type="number" name="number3" id="number3" required>
            <input type="submit" value="Desordenar">
        </form>
    </main>

    <section>
        <h2>Ordem Descrente</h2>

        <?php 
            echo "<p>Mostrando $number, $number2, $number3 de forma decrescente:</p>";
            
        ?>
    </section>
</body>
</html>