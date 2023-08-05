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

                    $letra = $_POST['txtLetra'];
                    
                    switch ($letra) {
                        case 'a':
                            echo '<h2>Letra Igual á A</h2> <p><img src="../view/img/atividades/a.png"></p>';
                            break;
                        
                        case 'c':
                            echo '<h2>Letra Está entre C - D </h2> <p><img src="../view/img/atividades/cd.png"></p>';
                            break;
                        
                        case 'd':
                            echo '<h2>Letra Está entre C - D </h2> <p><img src="../view/img/atividades/cd.png"></p>';
                            break;
                            
                        case 'f':
                            echo '<h2>Letra Está entre F - G - H</h2> <p><img src="../view/img/atividades/fgh.png"></p>';
                            break;

                        case 'g':
                            echo '<h2>Letra Está entre F - G - H</h2> <p><img src="../view/img/atividades/fgh.png"></p>';
                            break;
                        
                        case 'h':
                            echo '<h2>Letra Está entre F - G - H</h2> <p><img src="../view/img/atividades/fgh.png"></p>';
                            break;
                        case 'j':
                            echo '<h2>Letra Igual á J</h2> <p><img src="../view/img/atividades/j.png"></p>';
                            break;
                        case 'l':
                            echo '<h2>Letra Está entre L - M - N</h2> <p><img src="../view/img/atividades/lmn.png"></p>';
                            break;
                        
                        case 'm':
                            echo '<h2>Letra Está entre L - M - N</h2> <p><img src="../view/img/atividades/lmn.png"></p>';
                            break;

                        case 'n':
                            echo '<h2>Letra Está entre L - M - N</h2> <p><img src="../view/img/atividades/lmn.png"></p>';
                            break;
                        
                        case 'p':
                            echo '<h2>Letra Igual á P</h2> <p><img src="../view/img/atividades/p.png"></p>';
                            break;

                        case 'q':
                            echo '<h2>Letra Igual á Q</h2> <p><img src="../view/img/atividades/q.png"></p>';
                            break;

                        case 'r':
                            echo '<h2>Letra Igual á R</h2> <p><img src="../view/img/atividades/r.png"></p>';
                            break;
                        
                        default:
                            echo '<h2>A letra digitada não está entre as escolidas</h2>';
                            break;
                    }
                ?>      
                <a href="../view/html/atividade/alfabeto.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>