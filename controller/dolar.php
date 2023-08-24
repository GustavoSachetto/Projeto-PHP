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

                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'08-02-2023\'&@dataFinalCotacao=\'08-16-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                    $dados = json_decode(file_get_contents($url), true);

                    $cotacao = $dados["value"][0]["cotacaoCompra"];

                    $real = $_REQUEST["txtreal"] ?? 0;

                    $dolar = $real / $cotacao;

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "<h2> A quantia digitada foi: " . numfmt_format_currency($padrao, $real, "BRL") . " equivalente a: <p>" . numfmt_format_currency($padrao, $dolar, "USD") ."</p></h2>";

                ?>
                <a href="../view/html/atividade/dolar.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>