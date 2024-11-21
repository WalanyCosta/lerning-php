<?php 
    require './teste.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php 
            
            $cotacao = getDataOfTheAPIBCB();
            $numberReal = $_REQUEST['number'] ?? 0;

            if(isset($numberReal) && $numberReal > 0){
                $result = $numberReal / $cotacao;

                echo "<p>Seus R$ ".getCurrentInFormatBR($numberReal)." equivalem a <strong> US$ ".getCurrentInFormatBR($result)."</strong></p>";
                
                echo "<p> Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>";
            }else{
                echo "<p>Error ao digitar o numero</p>";
            }
        ?>
        <button onclick="javascript:history.back()">Voltar</button>
    </main>
</body>
</html>