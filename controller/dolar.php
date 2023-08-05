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

                    $valorReais = $_POST['txtreal'];
                    $dolar =  5.00 ;
                    $dolarCon = $valorReais / $dolar ;

                    echo "<h2>Valor digitado: $valorReais R$</h2>";
                    echo "<p>Valor do dolar atualmente: $dolar R$</p>";
                    echo "<p>Valor digitado convertido em dolar: $dolarCon U$</p>";

                ?>
                <a href="../view/html/atividade/dolar.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>