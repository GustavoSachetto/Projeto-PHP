<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
    </head>
    <body>
        <main>
            <section>
                <?php  

                    $valor01 = $_POST['txtValor01'];
                    $valor02 = $_POST['txtValor02'];
                    $Sub = $valor01 - $valor02;
                    $Ad =  $valor01 + $valor02;
                    $Multi =  $valor01 * $valor02;
                    $Div =  $valor01 / $valor02;

                    echo "<h2>Valores Inseridos: $valor01 , $valor02 </h2>";
                    echo "<p>Subtração Dos Valores Inseridos : $Sub </p>";
                    echo "<p>Adição Dos Valores Inseridos: $Ad </p>";
                    echo "<p>Multiplicação Dos Valores Inseridos: $Multi </p>";
                    echo "<p>Divisão Dos Valores Inseridos: $Div </p>";

                ?>
                <a href="../view/html/atividade/calc.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>