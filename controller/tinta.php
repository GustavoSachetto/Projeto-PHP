<html>
    <head>
        <link rel="stylesheet" href="../view/css/style-resultado.css">
        <link rel="shortcut icon" href="../view/img/logo.png">
    </head>
    <body>
        <main>
            <section>
               <?php  

                  $A = $_POST['txtA'];
                  $L = $_POST['txtL'];
                  $R = $A * $L ;
                  
                  if($R < 36){
                     echo "<h2>Essa parede esta muito pequena, menos que uma lata ou apenas uma resolve</h2>";

                  } elseif (($R > 36) && ($R <71)){
                     echo "<h2>Você vai precisar de 2 baldes de tinta</h2>";

                  } elseif (($R > 72) && ($R < 107)) {

                     echo "<h2>Você vai precisar de 3 baldes de tinta</h2>";

                  } elseif (($R > 108) && ($R < 143 )){ 
                     
                     echo "<h2>Você vai precisar de 4 baldes de tinta</h2>";
                  
                  } elseif (($R > 144) && ($R < 180 )){

                     echo "<h2>Você vai precisar de 5 baldes de tinta</h2>";
                  
                  } elseif (($R > 180) && ($R < 215 )){

                     echo "<h2>Você vai precisar de 6 baldes de tinta</h2>";
                  
                  } elseif (($R > 216) && ($R < 251 )){

                     echo  "<h2>Você vai precisar de 7 baldes de tinta</h2>";


                  } elseif ($R > 252){

                     echo  "<h2>Essa parede esta muito grande, você vai precisar de muito mais baldes de tinta</h2>";

                  }

               ?>
               <a href="../view/html/atividade/tinta.html">Voltar</a>
            </section>
        </main>
    </body>    
</html>