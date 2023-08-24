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

                  $altura = $_POST['txtAltura'];
                  $largura = $_POST['txtLargura'];
                  $resultado = $altura * $largura;
                  
                  if($resultado < 36){
                     echo "<h2>Essa parede esta muito pequena, menos que uma lata ou apenas uma resolve</h2>";

                  } elseif (($resultado > 36) && ($resultado <71)){
                     echo "<h2>Você vai precisar de 2 baldes de tinta</h2>";

                  } elseif (($resultado > 72) && ($resultado < 107)) {

                     echo "<h2>Você vai precisar de 3 baldes de tinta</h2>";

                  } elseif (($resultado > 108) && ($resultado < 143 )){ 
                     
                     echo "<h2>Você vai precisar de 4 baldes de tinta</h2>";
                  
                  } elseif (($resultado > 144) && ($resultado < 180 )){

                     echo "<h2>Você vai precisar de 5 baldes de tinta</h2>";
                  
                  } elseif (($resultado > 180) && ($resultado < 215 )){

                     echo "<h2>Você vai precisar de 6 baldes de tinta</h2>";
                  
                  } elseif (($resultado > 216) && ($resultado < 251 )){

                     echo  "<h2>Você vai precisar de 7 baldes de tinta</h2>";


                  } elseif ($resultado > 252){

                     echo  "<h2>Essa parede esta muito grande, você vai precisar de muito mais baldes de tinta</h2>";

                  }

               ?>
               <a href="../view/html/atividade/tinta.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>