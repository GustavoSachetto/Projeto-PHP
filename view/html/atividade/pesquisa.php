<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../img/logo.png">

        <title>Projeto PHP - Atividade 9</title>
        
        <link rel="stylesheet" type="text/css" href="../../css/style-atividades.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <script src="../../js/script-tres.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    </head>
    <body>
        <header>
            <h1>Projeto PHP</h1>
            <button id="botaoNav"><img src="../../img/menu.png" id="imagemBotao" alt="Menu hamburguer"></button>
            <nav id="nav">
                <a href="../pesquisa.html">Pesquisa</a>
                <a href="../variaveis.html">Variaveis</a>
                <a href="../estrutura.html">Estrutura Decisão</a>
                <a href="../integrantes.html">Integrantes</a>
                <a href="../../../index.html" class="inicio">Inicio</a>
            </nav>
        </header>
        <main>
            <article>
                <h2>Pesquisa de opinião:</h2>
            </article>
            <section>
                <button id="botaoTopo"><img src="../../img/seta-cima.png" id="imagemBotaoTopo" alt="Seta para cima"></button>
                <h2 class="cheio entrada-txt">
                    Foi realizada uma pesquisa com 10 pessoas que assistiram uma peça de teatro, em relação a sua opinião sobre a mesma. Faça um algoritmo que, a partir destes dados, calcule:
                </h2>
                <pre class="entrada-txt">
                     - A quantidade de respostas 10; 
                     - Média de idade das pessoas que responderam o questionário;
                     - A percentagem de pessoas que responderam 5 ou menos para a opinião da peça;
                     - A idade da pessoa mais velha.
                </pre>
                <p class="entrada-txt">E imprima na tela resultado.</p>
                <form action="../../../controller/pesquisaRecebe.php" method="post">
                    <fieldset>
                        <h2>Digite aqui:</h2>                        
                        <?php for ($i=1; $i <= 10; $i++) { ?>
                            <h3>Pesquisa <?= $i?>: </h3>

                                <label for="identidade">Identificador:</label>
                                <input type="text" name='ident[]' id="ident" placeholder="Digite seu Identificador"> 

                                <label for="idade">Idade:</label>
                                <input type="number" name='idade[]' id="idade" min="1" max="130" placeholder="Digite a sua Idade">
                                
                                <label for="nota">Nota:</label>
                                <select name='nota[]' id="nota">
                                    <?php for ($n=1; $n <= 10; $n++) { ?>
                                        <option value="<?php echo $n ?>"><?php echo $n ?></option>
                                    <?php } ?>
                                </select>  
                            <?php } ?>
                        </fieldset>
                    <div class="botao">
                        <button type="reset" id="limpar">Limpar</button>
                        <button type="submit" id="enviar">Enviar</button>
                    </div>
                </form>
                <a class="voltar" href="../estrutura.html">Voltar</a>
            </section>    
        </main>
        <footer>
            <p>Desenvolvido por Gustavo Sachetto, Myrela e Kauany.</p>
            <a href="https://github.com/GustavoSachetto/Projeto-PHP" target="_blank" class="repositorio">Repositorio do projeto<img src="../../img/repositorio.png" class="github" alt="GitHub"></a>
        </footer>
    </body>
</html>