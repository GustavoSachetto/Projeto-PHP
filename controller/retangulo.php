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

                    $altura = $_POST['txtAlt'];
                    $largura = $_POST['txtLarg'];
                    $area = number_format(($altura * $largura),2) ;
                    $perimetro = number_format((($altura + $largura) * 2),2);

                    echo "<h2>Área: $area metros</h2>";
                    echo "<h2>Perimetro: $perimetro metros</h2>";

                ?>
                <a href="../view/html/atividade/retangulo.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>