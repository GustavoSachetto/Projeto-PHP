<html>
    <head>
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
                    $desc = ($valorTotal * 10  ) /100 ;
                    $valorTotalDesc = $valorTotal - $desc;

                    echo "<h2> Nome do produto: $nome </h2>";
                    echo "<p> Valor Unitario : $valorVenda </p>";
                    echo "<p> Valor Total Sem Desconto : $valorTotal </p>";
                    echo "<p> Valor Total com 10% de Desconto : $valorTotalDesc </p>";

                ?>
                <a href="../view/html/atividade/desc_calc.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>