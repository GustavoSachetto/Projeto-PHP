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
                    $nome = $_POST['txtNome'];
                    $nasc = $_POST['txtNasc'];
                    $ano = $_POST['txtAno'];
                    $result = $ano - $nasc;
            
                    if ($result < 0) {
                        echo "Idade Invalida!";
                    }
                        elseif ($result < 13) {
                            echo "<h2>$nome sua idade será: $result anos</h2> <p>Você ainda será criança!</p>";
                        }
                            elseif ($result > 17 && $result <59) {
                            echo "<h2>$nome sua idade será: $result anos</h2> <p>Você será maior de idade!</p>";
                            }
                                elseif ($result > 59 && $result < 100) {
                                echo "<h2>$nome sua idade será: $result anos</h2> <p>Você será idoso!</p>";
                    }
                    else {
                        echo "<h2>$nome sua idade será: $result anos</h2>";
                    }
                ?>
                <a href="../view/html/atividade/idade_qnd.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>