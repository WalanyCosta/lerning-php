<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v.10</h1>

        <?php
            define('FIXE_QUOTE', 5.22);
            $number = $_POST['number'];

            if(filter_var($number, FILTER_VALIDATE_FLOAT)){
                $convert = $number / FIXE_QUOTE;
                $convertFormated = number_format($convert, 2,',', '.');
                
                echo "<p>Seus R$ $number equivalem a <strong>US\$ $convertFormated</strong></p>";
                echo "<p><strong>Cotação fixa de R$".number_format(FIXE_QUOTE, 2, ',', '.')."</strong> informada diretamente no código.</p>";
            }else{
                echo "Preenche o campo com valor numerico!";
            }
            
        ?>
        <button onclick="javascript:history.back()">Voltar</button>
    </main>
</body>
</html>