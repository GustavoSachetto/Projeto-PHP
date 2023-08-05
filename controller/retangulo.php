<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
        <link rel="shortcut icon" href="../view/img/logo.png">
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