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
            <article>
                <h2>Resultado:</h2>
            </article>
            <section>
                <?php  

                    $valor01 = $_POST['txtValor01'];
                    $valor02 = $_POST['txtValor02'];
                    $subtracao = number_format(($valor01 - $valor02),2);
                    $adicao =  number_format(($valor01 + $valor02),2);
                    $multiplicacao =  number_format(($valor01 * $valor02),2);
                    $divisao =  number_format(($valor01 / $valor02),2);

                    echo "<h2>Valores inseridos: $valor01 e $valor02 </h2>";
                    echo "<p>Subtração dos valores inseridos: $subtracao </p>";
                    echo "<p>Adição dos valores inseridos: $adicao </p>";
                    echo "<p>Multiplicação dos valores inseridos: $multiplicacao </p>";
                    echo "<p>Divisão dos valores inseridos: $divisao </p>";

                ?>
                <a href="../view/html/atividade/calc.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>