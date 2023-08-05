<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
        <link rel="shortcut icon" href="../view/img/logo.png">
    </head>
    <body>
        <main>
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