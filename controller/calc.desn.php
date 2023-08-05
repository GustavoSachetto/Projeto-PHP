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

                    $Nome = $_POST['txtNome'];
                    $Peso = $_POST['txtPeso'];
                    $Altura = $_POST['txtAlt'];

                    $imc = number_format($Peso / ($Altura * $Altura),2);

                    echo "<h2>O IMC de $Nome é $imc</h2>";

                    if ($imc < 18.5) {
                        echo "<p>O paciente está abaixo do peso</p>";
                    }
                    else if (($imc >= 18.5) && ($imc <= 24.9)) {
                        echo "<p>O paciente está com o peso adequado</p>";
                    }
                    else if (($imc >= 25) && ($imc <= 29.9)) {
                        echo "<p>O paciente apresenta sobrepeso</p>";
                    }
                    else if (($imc >= 30) && ($imc <= 34.9)) {
                        echo "<p>O paciente apresenta obesidade grau 1</p>";
                    }
                    else {
                        echo "<p>O paciente necessita de ajuda!</p>";
                    }

                ?>
                <a href="../view/html/atividade/calc_desn.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>