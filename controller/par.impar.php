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