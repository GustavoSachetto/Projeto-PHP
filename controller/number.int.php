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

                    $n1 = $_POST['txtNumber'];

                    switch ($n1) {
                                
                        case '1':
                            echo '<h2>Você está em Janeiro</h2> <p>Sua estação do ano é Verão</p> <p><img src="../view/img/atividades/verao.png"></p>';
                            break;
                        
                        case '2':
                            echo '<h2>Você está em Fevereiro</h2> <p>Sua estação do ano é Verão</p> <p><img src="../view/img/atividades/verao.png"></p>';
                            break;
                        
                        case '3':
                            echo '<h2>Você está em Março</h2> <p>Sua estação do ano é Outono</p> <p><img src="../view/img/atividades/outono.png"></p>';
                            break;
                        
                        case '4':
                            echo '<h2>Você está em Abril</h2> <p>Sua estação do ano é Outono</p> <p><img src="../view/img/atividades/outono.png"></p>';
                            break;
                        
                        case '5':
                            echo '<h2>Você está em Maio</h2> <p>Sua estação do ano é Outono</p> <p><img src="../view/img/atividades/outono.png"></p>';
                            break;

                        case '6':
                            echo '<h2>Você está em Junho</h2> <p>Sua estação do ano é Inverno</p> <p><img src="../view/img/atividades/inverno.png"></p>';
                            break;

                        case '7':
                            echo '<h2>Você está em Julho</h2> <p>Sua estação do ano é Inverno</p> <p><img src="../view/img/atividades/inverno.png"></p>';
                            break;
                        
                        case '8':
                            echo '<h2>Você está em Agosto</h2> <p>Sua estação do ano é Inverno</p> <p><img src="../view/img/atividades/inverno.png"></p>';
                            break;
                        
                        case '9':
                            echo '<h2>Você está em Setembro</h2> <p>Sua estação do ano é Primavera</p> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;
                        
                        case '10':
                            echo '<h2>Você está em Outubro</h2> <p>Sua estação do ano é Primavera</p> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;
                        
                        case '11':
                            echo '<h2>Você está em Novembro</h2> <p>Sua estação do ano é Primavera</p> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;

                        case '12':
                            echo '<h2>Você está em Dezembro</h2> <p>Sua estação do ano é Primavera</p> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;     
                    
                        }

                ?>
                <a href="../view/html/atividade/number_int.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>