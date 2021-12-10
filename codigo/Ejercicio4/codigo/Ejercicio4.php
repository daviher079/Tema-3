<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Ejercicio 4</title>
</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Ejercicio 4</h1>
    </header>
    <!--
        Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
        un valor con el que pagar por encima (Valor del producto 6.33€ y ha pagado con 10€) Muestra el
        número mínimo de monedas con las que puedes: devolver el cambio
    -->
    <main>
        <?
            
            $precio=($_GET['precio'])*100;
            $pago=($_GET['pago'])*100;
            

            $diferencia= $pago-$precio;

            $monedasDos=0;
            $monedaUno=0;
            $moneda50Cts=0;
            $moneda20Cts=0;
            $moneda10Cts=0;
            $moneda05Cts=0;
            $moneda02Cts=0;
            $moneda01Cts=0;

            echo "<h1>La diferencia entre el producto comprado y el dinero entregado es. ".(($diferencia)/100)."€</h1><br/>";

            for($i=0; $i< $diferencia; $i+=200)
            {
                
                $monedasDos++;
                $diferencia -= 200;
            }

            echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$monedasDos."</strong> monedas de <strong>dos</strong></p><br/>";

            if($diferencia<200&&$diferencia>=100)
            {
                for ($i=0; $i< $diferencia; $i+=100)
                {
                
                    $monedaUno++;
                    $diferencia -= 100;
                }

                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$monedaUno."</strong> monedas de <strong>uno</strong></p><br/>";
            }
            if($diferencia<100&&$diferencia>=50)
            {
                for ($i=0; $i< $diferencia; $i+=50)
                {
                    $moneda50Cts++;
                    $diferencia -= 50;
                }
                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$moneda50Cts."</strong> monedas de <strong>50cts</strong></p><br/>";
            }
            if($diferencia<50&&$diferencia>=20)
            {
                for ($i=0; $i< $diferencia; $i+=20)
                {
                    
                    $moneda20Cts++;
                    $diferencia -= 20;
                }

                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$moneda20Cts."</strong> monedas de <strong>20cts</strong></p><br/>";
            }
            if($diferencia<20&&$diferencia>=10)
            {
                for ($i=0; $i< $diferencia; $i+=10)
                {
                    
                    $moneda10Cts++;
                    $diferencia -= 10;
                }

                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$moneda10Cts."</strong> monedas de <strong>10cts</strong></p><br/>";
            }
            if($diferencia<10&&$diferencia>=5)
            {
                for ($i=0; $i< $diferencia; $i+=5)
                {
                    
                    $moneda05Cts++;
                    $diferencia -= 5;
                }

                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$moneda05Cts."</strong> monedas de <strong>0'05cts</strong></p><br/>";
            }
            if($diferencia<5&&$diferencia>=2)
            {
                for ($i=0; $i< $diferencia; $i+=2)
                {
                    $moneda02Cts++;
                    $diferencia -= 2;
                }

                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$moneda02Cts."</strong> monedas de <strong>0'02cts</strong></p><br/>";
            }
            if($diferencia<2&&$diferencia>=1)
            {
                for ($i=0; $i< $diferencia; $i+=1)
                {
                    $moneda01Cts++;
                    $diferencia -= 1;
                }
                echo "<p style='margin-bottom:-15px;'>Se devuelven <strong>".$moneda01Cts."</strong> monedas de <strong>0'01cts</strong></p><br/>";
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