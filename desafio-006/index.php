<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numberDivided = $_GET['numberDivided'] ?? 0;
        $numberDivider = $_GET['numberDivider'] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma divisão</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numberDivided">Dividendo</label>
            <input type="number" name="numberDivided" id="numberDivided" value="<?=$numberDivided?>">
            <label for="numberDivider">Divisor</label>
            <input type="number" name="numberDivider" id="numberDivider" value="<?=$numberDivider?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <?php 
         $quotient = floor($numberDivided / $numberDivider);
         $rest = $numberDivided % $numberDivider;
    ?>

    <section>
        <h2>Estrutura da Divisão</h2>

        <table class="divisao">
            <tr>
                <td><?=$numberDivided?></td>
                <td><?=$numberDivider?></td>
            </tr>
            <tr>
                <td><?=$rest?></td>
                <td><?=$quotient?></td>
            </tr>
        </table>
    </section>
</body>
</html>