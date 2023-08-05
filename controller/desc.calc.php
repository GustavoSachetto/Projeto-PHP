<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
        <link rel="shortcut icon" href="../view/img/logo.png">
    </head>
    <body>
        <main>
            <section>
                <?php  

                    $nome = $_POST['txtName'];
                    $valorVenda = $_POST['textVal'];
                    $quantidade =$_POST['textQuant']; 
                    $valorTotal = $valorVenda * $quantidade;
                    $desc = ($valorTotal * 10  ) /100 ;
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