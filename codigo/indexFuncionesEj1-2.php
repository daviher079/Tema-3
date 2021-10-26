<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <title>Tarea 06</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootPrincipal/imgPrincipal/LogotipoDavid.jpg"/>
        <h1>Tarea 06</h1>
    </header>
    <main>
        
        <?php
            //Ejercicio 1
            require_once("./funcionesEj1-2.php");

            h1("Ejercicio 1");
            br();
            br();
            p("Prueba h1 ");
            br();
            br();
            p("Prueba de p ");
            br();
            br();
            echo self();

            br();
            br();
            echo "La letra del DNI 12345678 es ",letraDni(12345678);
             
            //Ejercicio2
            h1("Ejercicio 2");
            $array=array();
            $min=5;
            $max=20;
            $nGenerados=8;
            $repeticion=true;

            $array2=generaNumeros($array, $min, $max,$nGenerados, $repeticion);
            echo "<pre>";
                print_r($array2);
            echo"</pre>";


        ?>
    
    


    </main>
    <footer>
        <p>Footer de David</p>
        <a href="codigoTarea06.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>