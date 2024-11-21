<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio013</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
        $value = $_REQUEST['value'] ?? 0;

        function formatCurrent($value){
            $default = numfmt_create('pt-br', NumberFormatter::CURRENCY);
            return numfmt_format_currency($default, $value, 'BRL');
        }

        function sacar($value){

            $hundred = intVal($value / 100);
            $rest = $value % 100;
            $fifty = intVal($rest / 50);
            $rest %= 50;
            $ten = intVal($rest / 10);
            $rest %= 10;
            $five = intVal($rest / 5);

            return [
                'hundred' => $hundred,
                'fifty' => $fifty,
                'ten' => $ten,
                'five' => $five
            ];
        }
    ?>
    <main>
        <h2>Caixa Eletronico</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="value">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="value" id="value" value="<?= $value ?>">
            <p style="font-size: 0.75em;">*Notas disponíveis: R$100, R$50, R$10 e R$10</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?= formatCurrent($value) ?> realizado</h2>
        <p>O caixa eletronico vai te entregar a seguintes notas:</p>
        <?php 
            if($value < 10 || $value > 600){
                echo "<strong>O não é permitido retirar valor abaixo de 10 e acima 600 R$<strong>";
            }else{
                echo "
                    <ul>
                    <li>
                        <img class='moneys' src=\"./imagens/100-reais.jpg\" alt=\"100-reais\">
                        <span>x".sacar($value)['hundred']."</span>
                    </li>
                    <li>
                        <img class='moneys' src=\"./imagens/50-reais.jpg\" alt=\"50-reais\">
                        <span>x".sacar($value)['fifty']."</span>
                    </li>
                    <li>
                        <img class='moneys' src=\"./imagens/10-reais.jpg\" alt=\"10-reais\">
                        <span>x".sacar($value)['ten']."</span>
                    </li>
                    <li>
                        <img class='moneys' src=\"./imagens/5-reais.jpg\" alt=\"5-reais\">
                        <span>x".sacar($value)['five']."</span>
                    </li>
                </ul>
                ";
            }
        
        ?>
        
        
    </section>
</body>
</html>