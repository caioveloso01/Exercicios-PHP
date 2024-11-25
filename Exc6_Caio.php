<html>

    <head>
        <title>Exercicio 6 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!--  6 - Faça um algoritmo que aborde a seguinte situação: Uma loja fornece 10% de desconto 
        para funcionários e 5% de desconto para clientes vips. Faça um programa que calcule o valor total 
        a ser pago por uma pessoa. O script deverá ler o valor total da compra e um código que identifique 
        se o comprador é um cliente comum (1), funcionário (2) ou vip (3); -->

        <?php
            // Solicita o valor da compra e o código do comprador
            $valorCompra = 750;  // Exemplo de valor da compra
            $codigoComprador = 2;  // 1: Comum, 2: Funcionário, 3: VIP

            // Verifica o tipo de comprador e aplica o desconto correspondente
            switch ($codigoComprador) {
                case 1:  // Cliente Comum
                    $desconto = 0;  // Sem desconto
                    break;
                case 2:  // Funcionário
                    $desconto = 0.10;  // 10% de desconto
                    break;
                case 3:  // VIP
                    $desconto = 0.05;  // 5% de desconto
                    break;
                default:
                    echo "Código de comprador inválido!";
                    exit;  // Encerra o script se o código for inválido
            }

            // Calcula o valor com desconto
            $valorDesconto = $valorCompra * $desconto;
            $valorFinal = $valorCompra - $valorDesconto;

            // Exibe o valor final após o desconto
            echo "Valor da compra: R$ " . number_format($valorCompra, 2, ',', '.') . "\n";
            echo "Desconto aplicado: R$ " . number_format($valorDesconto, 2, ',', '.') . "\n";
            echo "Valor final a ser pago: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
        ?>

    </body>

</html>