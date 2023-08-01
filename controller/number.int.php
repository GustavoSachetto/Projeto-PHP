<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
    </head>
    <body>
        <main>
            <section>
                <?php  

                    $n1 = $_POST['txtNumber'];

                    switch ($n1) {
                                
                        case '1':
                            echo '<h2>Você está em Janeiro! sua estação do ano é Verão</h2> <p><img src="../view/img/atividades/verao.png"></p>';
                            break;
                        
                        case '2':
                            echo '<h2>Você está em Fevereiro! sua estação do ano é Verão</h2> <p><img src="../view/img/atividades/verao.png"></p>';
                            break;
                        
                        case '3':
                            echo '<h2>Você está em Março! sua estação do ano é Outono</h2> <p><img src="../view/img/atividades/outono.png"></p>';
                            break;
                        
                        case '4':
                            echo '<h2>Você está em Abril! sua estação do ano é Outono</h2> <p><img src="../view/img/atividades/outono.png"></p>';
                            break;
                        
                        case '5':
                            echo '<h2>Você está em Maio! sua estação do ano é Outono</h2> <p><img src="../view/img/atividades/outono.png"></p>';
                            break;

                        case '6':
                            echo '<h2>Você está em Junho! sua estação do ano é Inverno</h2> <p><img src="../view/img/atividades/inverno.png"></p>';
                            break;

                        case '7':
                            echo '<h2>Você está em Julho! sua estação do ano é Inverno</h2> <p><img src="../view/img/atividades/inverno.png"></p>';
                            break;
                        
                        case '8':
                            echo '<h2>Você está em Agosto! sua estação do ano é Inverno</h2> <p><img src="../view/img/atividades/inverno.png"></p>';
                            break;
                        
                        case '9':
                            echo '<h2>Você está em Setembro! sua estação do ano é Primavera</h2> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;
                        
                        case '10':
                            echo '<h2>Você está em Outubro! sua estação do ano é Primavera</h2> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;
                        
                        case '11':
                            echo '<h2>Você está em Novembro! sua estação do ano é Primavera</h2> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;

                        case '12':
                            echo '<h2>Você está em Dezembro! sua estação do ano é Primavera</h2> <p><img src="../view/img/atividades/primavera.png"></p>';
                            break;     
                        
                        default: 
                            echo "<h2>Digite um numero valido de 1 á 12</h2>";
                            break;
                    }

                ?>
                <a href="../view/html/atividade/number_int.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>