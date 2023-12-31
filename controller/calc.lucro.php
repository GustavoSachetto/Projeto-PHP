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

                    $precoCusto = $_POST['txtValor1'];
                    $precoVenda = ($precoCusto /100) *150;
                    $lucro = ($precoCusto - 1.00) - 0.50;

                    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                    echo "<h2>Pretende vender o brigadeiro por: " . numfmt_format_currency($padrao, $precoVenda, "BRL") . "</h2>";
                    echo "<p>Tendo um lucro de: " . numfmt_format_currency($padrao, $lucro, "BRL") . "</p>";

                ?>
                <a href="../view/html/atividade/calc_lucro.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>
