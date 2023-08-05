<html>
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

                    $altura = $_POST['txtAlt'];
                    $largura = $_POST['txtLarg'];
                    $area = $altura * $largura ;
                    $perimetro = ($altura + $largura) * 2;

                    echo "<h2>Área: $area</h2>";
                    echo "<h2>Perimetro: $perimetro</h2>";

                ?>
                <a href="../view/html/atividade/retangulo.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>