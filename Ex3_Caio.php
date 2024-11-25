<html>

    <head>
        <title>Exercicio 3 - P3 DSI - Caio Veloso - FATEC São Roque</title>
    </head>

    <body>
         <!--  3 - Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada 
        de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou 
        igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final 
        calculada. 
        Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]. .-->

        <?php
            // Solicita as notas do aluno
            $nota1 = 7;  // Exemplo de nota 1
            $nota2 = 9; // Exemplo de nota 2
            $nota3 = 6;  // Exemplo de nota 3

            // Insere as notas em um array
            $notas = array($nota1, $nota2, $nota3);

            // Calcula a média final
            $media = array_sum($notas) / 3;

            // Exibe a média final
            echo "Média Final: $media ";

            // Verifica se o aluno foi aprovado ou reprovado
            if ($media >= 6) {
                echo "Aprovado";
            } else {
                echo "Reprovado";
            }
        ?>

    </body>

</html>