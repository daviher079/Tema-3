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
          
            require_once("./funciones.php");
            saludo();
            echo "<br/>";
            saludoNombre("David");
            echo "<br/>";
            precioConIVA(4.45, 0.04);
            echo "<br/>";
            echo "El precio final del producto es ", precioConIVADevuelve(4.45, 0.04);
            echo "<br/>";
            $precio=10;

            echo $precio;
            echo "<br/>";
            precio_a_precioIVA($precio);
            echo $precio;

            $array=array();



            addValor($array);
            addValor($array);
            addValor($array);
            addValor($array);
            

            echo "<br>";

            echo "<pre>";
                print_r($array);
            echo"</pre>";

            class Figura
            {
                public $lado=5;
            }

            $miFigura= new Figura();
            echo"<br/>";
            echo "El lado ", $miFigura->lado;
            agrandar($miFigura);
            echo"<br/>";
            echo "El lado ", $miFigura->lado;



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