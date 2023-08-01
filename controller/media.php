<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
    </head>
    <body>
        <main>
            <section>
                <?php  

                    $nota01 = $_POST['txtNota01'];
                    $nota02 = $_POST['txtNota02'];
                    $Media = ($nota01 + $nota02) / 2;

                    echo "<h2>Notas Digitadas: $nota01 , $nota02 </h2>";
                    echo "<p>Média Calculada: $Media </p>";

                ?>
                <a href="../view/html/atividade/media.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>