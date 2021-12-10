<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Ejercicio 5</h1>
    </header>
    
    <main>
        <?
            $anio=$_GET['anio'];

            if($anio%4==0)
            {
                if($anio%100==0)
                {
                    if($anio%400==0)
                    {
                        echo "<p>El año ". $anio." es: Bisiesto</p>";
                    }
                    else
                        echo "<p>El año ". $anio.": No es bisiesto</p>";
                }
                else
                    echo "<p>El año ". $anio." es: Bisiesto</p>";
            }else
            {
                echo "<p>El año ". $anio.": No es bisiesto</p>";
            }

        ?>
    </main>

    <footer>
        <p>Footer de David</p>
        <a href="./verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="../../../index.html"><img src="../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>