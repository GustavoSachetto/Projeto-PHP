<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
        <link rel="shortcut icon" href="../view/img/logo.png">
    </head>
    <body>
        <main>
            <section>
                <?php 

                    $PrecoCusto = $_POST['txtValor01'];
                    $PrecoVenda = ($PrecoCusto /100) *150;
                    $Lucro = ($PrecoCusto - 1.00) - 0.50;

                    echo "<h2>Pretende vender o brigadeiro por : $PrecoVenda R$</h2>";
                    echo "<p> Tendo um lucro de: $Lucro R$</p>";

                ?>
                <a href="../view/html/atividade/calc_lucro.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>
