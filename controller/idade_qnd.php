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
                    $nome = $_POST['txtNome'];
                    $nascimento = $_POST['txtNasc'];
                    $ano = $_POST['txtAno'];
                    $resultado = $ano - $nascimento;
            
                    if ($resultado < 0) {
                        echo "<h2>Digite os valores novamente!</h2> <p>Idade Invalida</p>";
                    }
                        elseif ($resultado < 13) {
                            echo "<h2>$nome sua idade será: $resultado anos</h2> <p>Você ainda será criança!</p>";
                        }
                            elseif ($resultado > 17 && $resultado <59) {
                            echo "<h2>$nome sua idade será: $resultado anos</h2> <p>Você será maior de idade!</p>";
                            }
                                elseif ($resultado > 59 && $resultado < 100) {
                                echo "<h2>$nome sua idade será: $resultado anos</h2> <p>Você será idoso!</p>";
                    }
                    else {
                        echo "<h2>$nome sua idade será: $resultado anos</h2>";
                    }
                ?>
                <a href="../view/html/atividade/idade_qnd.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>