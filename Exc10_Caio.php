<html>

    <head>
        <title>Exercicio 10 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!--10 - Faça um algoritmo PHP que receba dois valores quaisquer e imprime todos os 
                valores intermediários a ele, veja exemplo: Primeiro Valor = 5 Segundo Valor = 15 Imprime: 6 7 8 9 10 11 12 13 14  -->

        <?php
            // Definindo os valores (podem ser modificados ou recebidos de um formulário)
            $primeiroValor = 9;  // Exemplo de primeiro valor
            $segundoValor = 19;  // Exemplo de segundo valor

            // Verifica se o primeiro valor é menor que o segundo para garantir a ordem
            if ($primeiroValor < $segundoValor) {
                // Usando um loop para imprimir os valores intermediários
                for ($i = $primeiroValor + 1; $i < $segundoValor; $i++) {
                    echo $i . " ";  // Imprime o valor seguido de um espaço
                }
            } else {
                echo "O primeiro valor deve ser menor que o segundo valor.";
            }
        ?>

    </body>

</html>