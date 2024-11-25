<html>

    <head>
        <title>Exercicio 2 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!-- 2 - Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente 
            em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". Dica, 
            utilizem concatenação. -->
        <?php

            // Recebe os valores A e B
            $A = 120;  // valor para A
            $B = 75;  // valor para B
            
            // Verifica qual valor é maior e imprime em ordem crescente
            if ($A < $B) {
                echo $A . " A menor que B " . $B;  // A vem antes de B
            } else {
                echo $B . " B menor que A " . $A;  // B vem antes de A
            }
        ?>

    </body>

</html>