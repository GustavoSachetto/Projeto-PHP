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
                    $idade = array();
                    $ident = array();
                    $nota = array();
                    
                    $notabaixa = 0;
                    $notadez = 0;
                    $somaidade = 0;

                    $idade = $_POST['idade'];
                    $ident= $_POST['ident'];
                    $nota = $_POST['nota'];

                        for ($i=0; $i < 10; $i++) { 
                            
                            if ($nota [$i] == 10) {
                                $notadez ++;
                            }
                            elseif ($nota [$i] < 5) {
                                $notabaixa ++;
                            }
                        }

                    $somaidade = array_sum($idade);
                    $mediaidade = round($somaidade / 20);
                    $maxidade = max($idade);

                    $notaporc = ($notabaixa*100)/20;

                    echo"
                        <h2>Relatorio:</h2>
                        <p>Quantidade notas 10: ($notadez)</p>
                        <p>Média idade do publico: $mediaidade anos</p>
                        <p>Idade da pessoa mais Velha: $maxidade anos</p>
                        <p>Percentual de notas menores que cinco: $notaporc% </p>
                    ";
                ?>
                <a href="../view/html/atividade/pesquisa.php">Voltar</a>
            </section>
        </main>
    </body>    
</html>