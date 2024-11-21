<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizador de Número Real</h1>
        <?php
            function formatedNumber($number){
                return number_format($number, 3, ',', '.');
            }

            $number = $_GET['number'] ?? 0;
            if(filter_var($number, FILTER_VALIDATE_FLOAT) && $number > 0){
                $numberInt = (integer) $number;
                $numberReal = $number - $numberInt;

                echo"
                    <p>Analisando o número <strong>".formatedNumber($number)."</strong> informado pelo usuário:  <p>                   
                ";

                echo "<ul>
                <li>A parte inteira do número é <strong>".$numberInt."</strong></li>";
                echo "<li>A parte Fracionária do número é <strong>".formatedNumber($numberReal)."</strong></li></ul>";
            }else{
                echo "<p>Preencha o campo por favor.</p>";
            }
        ?>
        <button onclick="javascript:history.back();">Voltar</button>
    </main>
</body>
</html>