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

                    $nome = $_POST['txtName'];
                    $valorVenda = $_POST['textVal'];
                    $quantidade =$_POST['textQuant']; 
                    $valorTotal = $valorVenda * $quantidade;
                    $desconto = number_format((($valorTotal * 10  ) /100), 2) ;
                    $valorTotalDesc = $valorTotal - $desconto;

                    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                    echo "<h2>Nome do produto: $nome</h2>";
                    echo "<p>Valor unitário: ". numfmt_format_currency($padrao, $valorVenda, "BRL") ."</p>";
                    echo "<p>Valor total sem desconto: " . numfmt_format_currency($padrao, $valorTotal, "BRL") . "</p>";
                    echo "<p>Valor total com 10% de desconto: " . numfmt_format_currency($padrao, $valorTotalDesc, "BRL") . "</p>";

                ?>
                <a href="../view/html/atividade/desc_calc.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>