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

                    $n = $_POST['txtNumber'];

                    if ($n % 2 == 0) {
                        echo "<h2>O numero digitado é Par</h2>";
                    } else {
                        echo "<h2>O numero digitado é Impar</h2>";
                    }
                    
                ?>
                <a href="../view/html/atividade/par_impar.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>