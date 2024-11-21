<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dateOfBirth = $_POST['dateOfBirth'] ?? 0;
        $currentDate = $_POST['currentDate'] ?? intval(date('Y'));
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="dateOfBirth">Em que ano voçê nasceu</label>
            <input type="number" name="dateOfBirth" id="dateOfBirth" value="<?= $dateOfBirth ?>">
            <label for="currentDate">Quer saber sua idade em que ano?</label>
            <input type="number" name="currentDate" id="currentDate" value="<?= $currentDate ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $currentYear = 0;
            if($dateOfBirth > 0){
                $currentYear = $currentDate - $dateOfBirth;
            }

            echo "<p>Quem nasceu em $dateOfBirth vai ter <strong>$currentYear anos</strong> em $currentDate!</p>";
        ?>
    </section>
</body>
</html>