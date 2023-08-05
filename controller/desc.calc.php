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

                    $nome = $_POST['txtName'];
                    $valorVenda = $_POST['textVal'];
                    $quantidade =$_POST['textQuant']; 
                    $valorTotal = $valorVenda * $quantidade;
                    $desc = number_format((($valorTotal * 10  ) /100),2) ;
                    $valorTotalDesc = $valorTotal - $desc;

                    echo "<h2>Nome do produto: $nome</h2>";
                    echo "<p>Valor unitario : $valorVenda</p>";
                    echo "<p>Valor total sem desconto: $valorTotal</p>";
                    echo "<p>Valor total com 10% de desconto: $valorTotalDesc</p>";

                ?>
                <a href="../view/html/atividade/desc_calc.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>