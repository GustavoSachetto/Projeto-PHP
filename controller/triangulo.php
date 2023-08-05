<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../view/img/logo.png">
        
        <title>Projeto PHP - Resultado</title>
        
        <link rel="stylesheet" href="../view/css/style-resultado.css">
    </head>
    <body>
        <main>
            <section>
                <?php

                    $a = $_POST['txtA'];
                    $b = $_POST['txtB'];
                    $c = $_POST['txtC'];
                    $lados = $a + $b + $c;

                    if (($a < $lados) && ($b < $lados) && ($c < $lados)) {
                        if ($a == $b && $b == $c) {
                            echo '<h2>Tipo de triângulo: Equilatero </h2> <p><img src="../view/img/atividades/equilatero.png"></p>';
                        } else if ($a == $c || $a == $b|| $b == $c ) {
                            echo '<h2>Tipo de triângulo: Isosceles </h2> <p><img src="../view/img/atividades/isosceles.png"></p>';
                        } else {
                            echo '<h2>Tipo de triângulo: Escaleno </h2> <p><img src="../view/img/atividades/escaleno.png"></p>';
                        }
                    } else {
                        echo '<h2>Os numeros que você digitou não formam um triangulo, por favor tente denovo!</h2>';
                    }

                ?>
                <a href="../view/html/atividade/triangulo.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>