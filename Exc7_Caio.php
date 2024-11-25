<html>

    <head>
        <title>Exercicio 7 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!-- 7 - Faça um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário 
        de acordo com a seguinte regra:  
        • salários até 300, reajuste de 50%  
        • salários maiores que 300, reajuste de 30%. -->

    <?php
            // Solicita o salário do funcionário
            $salario = 550;

            // Verifica o valor do salário e aplica o reajuste
            if ($salario <= 300) {
                // Reajuste de 50% para salários até 300
                $reajuste = 0.50;
            } else {
                // Reajuste de 30% para salários maiores que 300
                $reajuste = 0.30;
            }

            // Calcula o salário reajustado
            $salarioReajustado = $salario + ($salario * $reajuste);

            // Exibe o salário reajustado
            echo "Salário original: R$ " . number_format($salario, 2, ',', '.') . "\n";
            echo "Salário reajustado: R$ " . number_format($salarioReajustado, 2, ',', '.') . "\n";
            
        ?>

    </body>

</html>