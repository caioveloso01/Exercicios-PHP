<html>

    <head>
        <title>Exercicio 1 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
        <!--  1- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor 
        é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual 
        a Zero".-->
        
        <?php
             // Usuário insire um número
        $numero = 0;
        echo "Digite um número: $numero ";

        // Verifica se o número é positivo, negativo ou igual a zero
        if ($numero > 0) {
            echo "Valor Positivo\n";
        } elseif ($numero < 0) {
            echo "Valor Negativo\n";
        } else {
            echo "Valor Igual a Zero\n";
        }
        //Utilizei o numero 0, mas na hora de declarar pode ser utilizado qualquer numero sendo negativo, positivo ou igual a 0
        ?>

    </body>

</html>