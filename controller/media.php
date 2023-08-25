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
                    $nota3 = $_POST['txtNota3'];
                    $nota4 = $_POST['txtNota4'];
                    
                    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
                    $resultado = number_format($media, 1);

                    echo "<h2>Notas digitadas: $nota1 - $nota2 - $nota3 - $nota4</h2>";
                    echo "<p>Média calculada: $resultado</p>";

                ?>
                <a href="../view/html/atividade/media.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>