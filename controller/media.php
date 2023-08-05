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
            <section>
                <?php  

                    $nota01 = $_POST['txtNota01'];
                    $nota02 = $_POST['txtNota02'];
                    $Media = number_format((($nota01 + $nota02) / 2),2);

                    echo "<h2>Notas digitadas: $nota01 , $nota02</h2>";
                    echo "<p>Média calculada: $Media</p>";

                ?>
                <a href="../view/html/atividade/media.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>