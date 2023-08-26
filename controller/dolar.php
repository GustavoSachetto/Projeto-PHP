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

                    $cotacao = 5.20;

                    $real = $_REQUEST["txtreal"] ?? 0;

                    $dolar = $real / $cotacao;

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "<h2> A quantia digitada foi: " . numfmt_format_currency($padrao, $real, "BRL") . " equivalente a: " . numfmt_format_currency($padrao, $dolar, "USD") ."</h2>" . "<p>Cotação do dolar atualmente: ". numfmt_format_currency($padrao, $cotacao, "BRL") . "</p>";

                ?>
                <a href="../view/html/atividade/dolar.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>