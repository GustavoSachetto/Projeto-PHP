<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
        <link rel="shortcut icon" href="../view/img/logo.png">
        <title>Projeto PHP - Resultado</title>
    </head>
    <body>
        <main>
            <section>
                <?php  

                    $N1 = $_POST['txtCQ'];
                    $N2 = $_POST['txtAF'];
                    $N3 = $N1 * 10;
                    $N4 = $N2 * 365 ;
                    $N5 = ($N3 * $N4) /1440;

                    echo "<h2>O total de dias perdidos é $N5</h2>";

                ?>
                <a href="../view/html/atividade/fumante.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>