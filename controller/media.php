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

                    $nota01 = $_POST['txtNota01'];
                    $nota02 = $_POST['txtNota02'];
                    $Media = ($nota01 + $nota02) / 2;

                    echo "<h2>Notas digitadas: $nota01 , $nota02</h2>";
                    echo "<p>Média calculada: $Media</p>";

                ?>
                <a href="../view/html/atividade/media.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>