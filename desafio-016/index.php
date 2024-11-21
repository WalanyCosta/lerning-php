<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio016</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salary = $_POST['salary'] ?? 0;
        $salaryAcr = 0;
        $totalPercent = 0;
        $percent = 0;
    ?>
    <main>
        <h1>Aumento Salarial</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="salary">Quanto tu ganhas? (R$)</label>
            <input type="number" name="salary" id="salary" step="0.01" value="<?= $salary ?>" required>
            <input type="submit" value="Aumentar salario">
        </form>
    </main>

    <?php if(isset($salary)): ?>
    <section>
        <h2>Resultados</h2>
        <?php 
           
            if($salary <= 280){
                $percent = 20;
            }else if($salary > 280 && $salary <= 700){
                $percent = 15;
            }else if($salary > 700 && $salary <= 1500){
                $percent = 10;
            }else if($salary >= 1500){
                $percent = 5;
            }

            function formatCurrency($salary){
                $defaultCurrency = numfmt_create('pt-br', NumberFormatter::CURRENCY);
                return numfmt_format_currency($defaultCurrency, $salary, 'BRL');
            }

            $totalPercent = $salary * ($percent/100);
            $salaryAcr = $salary + $totalPercent;

            echo "<p>O salário antes do reajuste é <strong>".formatCurrency($salary)."</strong></p>";
            echo "<p>O Percentual de aumento aplicada <strong>$percent%</strong></p>";
            echo "<p><strong>".formatCurrency($totalPercent)."</strong> valor do aumento.</p>";
            echo "<p>O Salario com aumento é <strong>".formatCurrency($salaryAcr)."</strong></p>";
        ?>
    </section>
    <?php endif; ?>
</body>
</html>