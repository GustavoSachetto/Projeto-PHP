<html>
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

                    $valor01 = $_POST['txtValor01'];
                    $valor02 = $_POST['txtValor02'];
                    $Sub = $valor01 - $valor02;
                    $Ad =  $valor01 + $valor02;
                    $Multi =  $valor01 * $valor02;
                    $Div =  $valor01 / $valor02;

                    echo "<h2>Valores inseridos: $valor01 , $valor02 </h2>";
                    echo "<p>Subtração dos valores inseridos : $Sub </p>";
                    echo "<p>Adição dos valores inseridos: $Ad </p>";
                    echo "<p>Multiplicação dos valores inseridos: $Multi </p>";
                    echo "<p>Divisão dos valores inseridos: $Div </p>";

                ?>
                <a href="../view/html/atividade/calc.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>