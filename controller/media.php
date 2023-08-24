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

                    $nota1 = $_POST['txtNota1'];
                    $nota2 = $_POST['txtNota2'];
                    $media = number_format((($nota1 + $nota2) / 2),2);

                    echo "<h2>Notas digitadas: $nota1 e $nota2</h2>";
                    echo "<p>Média calculada: $media</p>";

                ?>
                <a href="../view/html/atividade/media.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>