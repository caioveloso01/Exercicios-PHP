<html>

    <head>
        <title>Exercicio 11- P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!--11 - Pesquise. Faça um algoritmo PHP que receba uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre 0 e o número total,
            exemplo:  * string = “Gil Eduardo de Andrade”  * total_caracter = 22  Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 -->

        <?php
            // A string fornecida
            $string = "Peter Parker";

            // Encontrar o número total de caracteres da string
            $total_caracter = strlen($string);

            // Usar um loop para imprimir os números de 1 até o total de caracteres
            for ($i = 1; $i <= $total_caracter; $i++) {
                echo $i . " ";  // Imprime o número seguido de um espaço
            }
        ?>

    </body>

</html>