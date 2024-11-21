<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio018</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $count = 0;
        $note = $_POST['note'] ?? 0;
    ?>

    <main>
        <?php while($count ): ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="note">Digite um valor valido</label>
                <input type="number" name="note" id="note" required>
                <input type="submit" value="Mostre Valor">
            </form>

            <?php
                
                if($note >= 0 && $note <= 10){
                    break;
                }
            ?>
        <?php endwhile?>
    </main>
</body>
</html>