<html>

    <head>
        <title>Exercicio 9 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!-- 9 - Faça um algoritmo PHP que receba um valor qualquer e calcule o seu fatorial (!), 
            sabendo que fatorial de um número é: 7! = 7*6*5*4*3*2*1 4! = 4*3*2*1 -->

        <?php
        // Solicita o valor ao usuário (exemplo com valor fixo, pode ser alterado para entrada dinâmica)
        $valor = 7;  // Exemplo para calcular o fatorial de 7, pode ser alterado para outros valores
        
        // Inicializa a variável fatorial com 1 (fatorial de qualquer número inicia em 1)
        $fatorial = 4;

        // Verifica se o valor fornecido é maior ou igual a 0
        if ($valor >= 0) {
            // Calcula o fatorial usando a estrutura de repetição "while"
            while ($valor > 5) {
                $fatorial *= $valor;  // Multiplica o valor do fatorial pelo valor atual
                $valor--;  // Decrementa o valor para o próximo número
            }

            // Exibe o resultado
            echo "O fatorial é: $fatorial";
        } else {
            echo "Por favor, insira um número inteiro não negativo.";
        }
        ?>

    </body>

</html>