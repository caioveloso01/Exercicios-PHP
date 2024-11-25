<html>

    <head>
        <title>Exercicio 8 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
             <!-- 8 - Faça um algoritmo em PHP que receba um valor qualquer e imprima os valores de 0 
            até o valor recebido, exemplo:  - Valor recebido = 9  - Impressão do programa – 0 1 2 3 4 5 6 7 8 9  -->

            <?php
            // Solicita o valor ao usuário (exemplo com valor fixo, pode ser alterado para entrada dinâmica)
            $valor = 15;  

            // Utiliza um laço de repetição "while" para imprimir os valores de 0 até o valor recebido
            $i = 0;
            while ($i <= $valor) {
                echo $i . " ";
                $i++;
            }
        ?>

    </body>

</html>