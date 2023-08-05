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

                    $N1 = $_POST['txtCQ'];
                    $N2 = $_POST['txtAF'];
                    $N3 = $N1 * 10;
                    $N4 = $N2 * 365 ;
                    $N5 = round(($N3 * $N4) /1440);

                    echo "<h2>O total de dias perdidos é $N5</h2>";

                ?>
                <a href="../view/html/atividade/fumante.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>