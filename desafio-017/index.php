<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio017</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $litro = $_REQUEST['litro'] ?? 0;
            $tipoCombustivel =  $_REQUEST['tipoCombustivel'] ?? '';
        ?>

        <h1>Bombas de Combustiveis</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="litro">Quanto litros vendidos?</label>
            <input type="number" name="litro" id="litro" required value="<?= $litro ?>">
            <label for="tipoCombustivel">Que tipo combustivel comprado?</label>
            <select name="tipoCombustivel" id="tipoCombustivel">
                <option value="">Escolha um tipo de combustível</option>
                <option value="alcool">Álcool</option>
                <option value="gasolina">Gasolina</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php if(isset($tipoCombustivel) && isset($litro)): ?>
        <section>
            <h2>Resultado da Venda do Combustível</h2>

            <?php 
                $preco = 0;
                $desconto = 0;
                $total = 0;

                function formatCurrency($number){
                    $defaultCurrency = numfmt_create('pt-br', NumberFormatter::CURRENCY);
                    return numfmt_format_currency($defaultCurrency, $number, 'BRL');
                }

                if($tipoCombustivel === "alcool"){
                    $preco = $litro * 1.90;
                    if($litro === 20){
                        $desconto = $preco * (3 /100);
                    }else if($litro >= 20){
                        $desconto = $preco * (5/100);
                    }
                    $total = $preco - $desconto; 
                }else if($tipoCombustivel === "gasolina"){
                    $preco = $litro * 2.50;
                    if($litro === 20){
                        $desconto = $preco * (4 /100);
                    }else if($litro >= 20){
                        $desconto = $preco * (6/100);
                    }
                    $total = $preco - $desconto; 
                }

                echo "<p>O valor a ser pago pelo(a) $tipoCombustivel é ".formatCurrency($total)."</p>";
            ?>
        </section>
    <?php endif; ?>
</body>
</html>