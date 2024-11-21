<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $number = $_POST['number'];
            $error = null;

            if(filter_var($number, FILTER_VALIDATE_INT)){
                $nextNumber = $number + 1;
                $previousNumber = $number - 1;

                echo "<p>O número escolhido foi <strong>$number</strong></p>";
                echo "<p>O seu antecessor é $previousNumber</p>";
                echo "<p>O seu sucessor é $nextNumber</p>";
            }else{
                echo 'Preencha o valor com um numero';
            }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>