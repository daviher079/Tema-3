<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Ver Código</title>
    
</head>
<body>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Código</h1>
    </header>
   

        <?php
            /*
                La función highlight_file muestra el codigo del fichero que se le ha pasado como parametro
            */
            $variable=$_GET['ficheroPHP'];
            highlight_file($variable);
        ?>
 
        
       
        

        
    <footer>
        <p>Footer de David</p>
        <a href="verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="./indexFuncionesEj1.php"><img src="../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>