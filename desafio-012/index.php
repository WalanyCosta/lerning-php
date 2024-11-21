<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_REQUEST['total'] ?? 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="total">Qual é o total da segundos?</label>
            <input type="number" name="total" id="total" value="<?= $total ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analizando o valor que você digitou, <strong><?= number_format($total, 0, ',', '.'); ?> segundos</strong> equivalem a um total de:</p>

        <?php 
            $weeks = (int)($total / 604800);
            $rest = $total % 604800;
            $days = (int) ($rest / 86400);
            $rest %= 86400;
            $hours = (int) ($rest / 3600);
            $rest%=3600;
            $minutes = (int) ($rest / 60);
            $rest %= 60;
            $second = $rest;
            
            echo <<< FRASE
                <ul>
                    <li>$weeks semanas</li>
                    <li>$days dias</li>
                    <li>$hours horas</li>
                    <li>$minutes minutos</li>
                    <li>$second segundos</li>
                </ul>
            FRASE;
        ?>
    </section>
</body>
</html>