<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Ejercicios 1 y 2</title>
</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Ejercicios 1 y 2</h1>
    </header>
    <main>
        <article>
            <section>
                <?php
                    //Ejercicio 1
                    require_once("./funcionesEj1.php");
                    
                    h1("Prueba de función h1");
                    
                    p("Prueba de p");

                    p("Ejemplo de la función self() ".self());

                    p("La letra del DNI 12345678 es ".letraDni(12345678));
                    
                ?>
            </section>
    
            <section>
                <?php
                    //Ejercicio2
                    h1("Ejercicio 2");
                    $array=array();
                    $min=5;
                    $max=20;
                    $nGenerados=5;
                    $repeticion=true;
    
                    $array2=generaNumeros($array, $min, $max,$nGenerados, $repeticion);
                    echo "<pre>";
                        print_r($array2);
                    echo"</pre>";

                    
                ?>
            </section>

        </article>
       
    
    


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