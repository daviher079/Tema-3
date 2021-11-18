<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../../web-root/css/style.css"/>
    <link rel="stylesheet" href="../../web-root/css/styleTarea8.css"/>
    <title>Lee Fichero XML</title>

    <style>
        table
        {
            margin-left:50px;
            border:2px #C823DE solid;
            width:500px;
        }

        thead
        {
            border:2px #C823DE solid;
        }

        tr
        {
            border:2px #C823DE solid;
            text-align:center;
        }

        td
        {
            padding:7px 15px;
            border:2px #C823DE solid;
            
        }

        a
        {
            text-decoration:none;
            color:#d02b4d;
        }

        a:hover
        {
            color: rgba(208, 43, 77, 0.5);
        }

    </style>
</head>
<body>
    <header>
        <img class="logo" src="../../../web-rootIndexPrincipal/img/LogotipoDavidVicente.png"/>
        <h1>Lee Fichero XML</h1>
    </header>
    <main>
        
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                
            </div>
        </div>  
        <form action="LeeFicheroXML.php" method="post" >
            
        </form>

        

        <?php
        
        ?>
           
        

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="codigoTarea06.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../../../web-rootIndexPrincipal/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>