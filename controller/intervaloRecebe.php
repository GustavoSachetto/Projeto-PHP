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
                    $intervalos = array();
                    $intervalos = $_POST['valor'];

                    $inter1 = 0;
                    $inter2 = 0;
                    $inter3 = 0;
                    $inter4 = 0;

                    for ($i=0; $i < 6; $i++) {
                        if ($intervalos[$i] >= 0 && $intervalos[$i] <= 24) {
                            $inter1 ++;
                        } elseif ($intervalos[$i] >= 25 && $intervalos[$i] <= 49) {
                            $inter2 ++;
                        } elseif ($intervalos[$i] >= 50 && $intervalos[$i] <= 74) {
                            $inter3 ++;
                        } else {
                            $inter4 ++;
                        }
                    }
                    
                    echo "<h2>Os valores digitados foram: </h2>";
                    echo "- ";
                    
                    foreach ($_POST['valor'] as $intervalos){
                        echo "$intervalos - ";
                    }
                    
                    echo "
                        <h2>E os intervalos são: </h2>
                        <p> entre 1 á 24: ($inter1)</p>
                        <p> entre 25 á 49: ($inter2)</p>
                        <p> entre 50 á 74: ($inter3)</p>
                        <p> entre 74 á 100: ($inter4)</p>
                    ";
                ?>
                <a href="../view/html/atividade/intervalo.php">Voltar</a>
            </section>
        </main>
    </body>    
</html>