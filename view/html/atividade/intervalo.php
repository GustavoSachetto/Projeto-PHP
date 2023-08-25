<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../img/logo.png">

        <title>Projeto PHP - Atividade 8</title>
        
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
                <h2>Intervalo de valores:</h2>
            </article>
            <section>
                <button id="botaoTopo"><img src="../../img/seta-cima.png" id="imagemBotaoTopo" alt="Seta para cima"></button>
                <h2 class="cheio entrada-txt">
                    Escrever um algoritmo que lê 20 valores, um de cada vez.
                </h2>
                <pre class="entrada-txt">
                    E conta quantos deles estão em cada um dos intervalos 
                    [0, 24];
                    [25, 49];
                    [50, 74];
                    [75, 100].
                </pre>
                <p class="entrada-txt">Escrevendo no final esta informação na tela.</p>
                <form action="../../../controller/intervaloRecebe.php" method="post">
                    <fieldset>
                        <h2>Digite aqui:</h2>                        
                            <?php for ($i=1; $i <= 6; $i++) { ?>
                                <label for="valor">Valor <?= $i?>: </label>
                                <input type="number" name="valor[]" id="valor[]" min="1" max="100" placeholder="Digite um valor" require/>                
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