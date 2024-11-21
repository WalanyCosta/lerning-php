<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $price = $_POST['price'] ?? 0;
        $slider = $_POST['slider'] ?? 50;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="price">Preço de Produto (R$)</label>
            <input type="number" name="price" id="price" value="<?= $price ?>">
            <label for="slider">Qual será o percentual de reajuste? <strong><span id="value"></span>%</strong></label>
            <input type="range" name="slider" 
            min="0" max="100" id="slider" step="1" value="<?= $slider ?>">
            <input type="submit" value="Reajustar" >
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <?php
            $formatCurrency = function($price){
               $defaultCurrency = numfmt_create('pt-br', NumberFormatter::CURRENCY);
                return numfmt_format_currency($defaultCurrency, $price, 'BRL');
            };
        
            $acr = $price *($slider / 100);
            $priceUp = $price + $acr;
        
            echo"
                <p>
                    O produto que custava ".$formatCurrency($price).", com
                    <strong>$slider% de aumento</strong> vai passar a custar <strong>".$formatCurrency($priceUp)."</strong> a partir de agora.
                </p>
            ";
        ?>
    </section>
</body>
<script>
    const value = document.querySelector("#value");
    const input = document.querySelector("#slider");
    value.textContent = input.value;
    input.addEventListener("input", (event) => {
        value.textContent = event.target.value;
    });
</script>
</html>