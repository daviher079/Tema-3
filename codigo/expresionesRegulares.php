<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <link rel="stylesheet" href="../web-root/css/styleTarea8.css"/>
    <title>Expresiones Regulares</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootPrincipal/imgPrincipal/LogotipoDavid.jpg"/>
        <h1>Expresiones Regulares</h1>
    </header>
    <main>

        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Expresiones Regulares</h2>
            </div>

            <?php
                $patron='/Holo/';
                echo preg_match($patron, "Hola me llamo Julian"), "<br>";

                echo "Punto comodin <br>";
                $patron='/log./';
                echo preg_match($patron, "log");
                echo preg_match($patron, "log3");
                echo preg_match($patron, "log21");
                echo preg_match($patron, "loga");

                echo "<br>Espacio probar con \s <br>";
                $patron='/a\sa/';
                echo preg_match($patron, "Maria a casa");
                echo preg_match($patron, "aa");

                echo "<br>Probar punto como literal \. <br>";
                $patron='/a\.a/';
                echo preg_match($patron, "Maria a casa");
                echo preg_match($patron, "a.a");

                echo "<br>Probar expresiones literales como conjunto []<br>";
                $patron='/[abcd][xyz]/';
                echo preg_match($patron, "ax");
                echo preg_match($patron, "aa");
                echo preg_match($patron, "dz");
                echo preg_match($patron, "d z");

                echo "<br>| or Me vale noviembre en ingles y en español<br>";
                $patron='/Nov(iembre|ember)?/';
                echo preg_match($patron, "Nov");
                echo preg_match($patron, "Noviembre");
                echo preg_match($patron, "November");

                echo "<br>$ es el final del string<br>";
                $patron='/21$/';
                echo preg_match($patron, "10/12/2021");
                echo preg_match($patron, "21/12/2020");
                echo "<br>^ Es el principio del string Ej nº de Cuenta<br>";
                $patron='/^ES/';
                echo preg_match($patron, "56487 4 984 84 684");
                echo preg_match($patron, "ES535 2353 486 ");

                echo "<br>^ Sirve para decir que no contenga <br>";
                $patron='/log[^AS]/';
                echo preg_match($patron, "log");
                echo preg_match($patron, "loga");
                echo preg_match($patron, "logA");
                
                
            ?>
        </div>


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