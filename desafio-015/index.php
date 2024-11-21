<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio015</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $schoolTurn = $_POST['turn'] ?? '';
    ?>
    <main>
        <h2>Turno de Estudo</h2>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="turn">Em que turno você estuda?</label>
            <input type="text" name="turn" id="turn" required>
            <p style="font-size: 0.75em;">Digite o seguintes valores: M - matutino, V - vespertino ou N - Noturno </p>

            <input type="submit" value="confirmar">
        </form>
    </main>

    <section>
        <h2>Mensagem de confirmação</h2>
        
        <?php
            if(empty($schoolTurn)){
                return ;
            }
            $schoolTurn = strtolower($schoolTurn);

            if($schoolTurn === 'm' || $schoolTurn === "matutino"){
                echo "<p>Bom dia</p>";
            }else if($schoolTurn === 'v' || $schoolTurn === "vespertino"){
                echo "<p>Boa Tarde</p>";
            }else if($schoolTurn === 'm' || $schoolTurn === "noturno"){
                echo "<p>Boa Noite</p>";
            }else{
                echo "Valor invalido";
            }
            
            
        ?>
    </section>
</body>
</html>