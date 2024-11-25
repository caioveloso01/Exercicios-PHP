<html>

    <head>
        <title>Exercicio 5 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
            <!--  5 - Elabore um algoritmo que leia dois valores do usuário e a operação que ele deseja 
            executar (Operações: soma, subtração, divisão, multiplicação). Execute a operação desejada e 
            mostre o resultado; -->

        <?php
        // Solicita os valores ao usuário
        $valor1 = 50;  // Exemplo de valor 1
        $valor2 = 5;   // Exemplo de valor 2
        $operacao = 'divisão';  // Exemplo de operação (soma, subtração, divisão, multiplicação)

        // Utilizando switch case para escolher a operação e exibir o resultado
        switch ($operacao) {
            case 'soma':
                $resultado = $valor1 + $valor2;
                echo "Resultado da soma: " . $resultado;
                break; // o break é usado no fim de cada case evitando que os próximos valores seja executados juntos.
            case 'subtração':
                $resultado = $valor1 - $valor2;
                echo "Resultado da subtração: " . $resultado;
                break;
            case 'divisão':
                // Verifica se o divisor não é zero
                if ($valor2 != 0) {
                    $resultado = $valor1 / $valor2;
                    echo "Resultado da divisão: " . $resultado;
                } else {
                    echo "Erro: Divisão por zero não é permitida!";
                }
                break;
            case 'multiplicação':
                $resultado = $valor1 * $valor2;
                echo "Resultado da multiplicação: " . $resultado;
                break;
            default: 
                echo "Operação inválida!";
        }
        ?>

    </body>

</html>