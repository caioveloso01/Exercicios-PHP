<html>

    <head>
        <title>Exercicio 4 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
            <!--  4 - Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número 
            seja fora desse intervalo, informar que não existe mês com este número. Exigência, resolva esse 
            exercício utilizando array. -->

        <?php
            // Solicita o número do mês
            $numero = 3; 

            // Define os meses em um array
            $meses = array(
                1 => "Janeiro", 
                2 => "Fevereiro", 
                3 => "Março", 
                4 => "Abril", 
                5 => "Maio", 
                6 => "Junho", 
                7 => "Julho", 
                8 => "Agosto", 
                9 => "Setembro", 
                10 => "Outubro", 
                11 => "Novembro", 
                12 => "Dezembro"
            );

            // Verifica se o número está no intervalo de 1 a 12
            if ($numero >= 1 && $numero <= 12) {
                // Exibe o mês correspondente
                echo "Mês: " . $meses[$numero];
            } else {
                // Exibe a mensagem de erro caso o número seja fora do intervalo
                echo "Não existe mês com este número.";
            }
        ?>

    </body>

</html>