<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Realiza un programa que le introduzca un valor de un producto con 2 decimales y posteriormente
        un valor con el que pagar por encima (Valor del producto 6.33€ y ha pagado con 10€) Muestra el
        número mínimo de monedas con las que puedes: devolver el cambio
    -->
    <main>
        <?
            
            $precio=$_GET['precio'];
            $pago=$_GET['pago'];

            $diferencia= $pago-$precio;

            $monedasDos=0;
            $monedaUno=0;
            $moneda50Cts=0;

            echo $diferencia;

            

            for($i=0; $i< $diferencia; $i+=2)
            {
                
                $monedasDos++;
                $diferencia -= 2;
            }

            echo "Se devuelven ".$monedasDos." monedas de dos ", $diferencia,"<br/>";


            for ($i=0; $i< $diferencia; $i+=1)
            {
                
                $monedaUno++;
                $diferencia -= 1;
            }
            echo "Se devuelven ".$monedaUno." monedas de uno ", $diferencia,"<br/>";    

            for ($i=0; $i< $diferencia; $i+=1)
            {
                
                $moneda50Cts++;
                $diferencia -= 0.50;
            }
            echo "Se devuelven ".$moneda50Cts." monedas de 50 cts ", $diferencia,"<br/>";
            
            for ($i=0; $i< $diferencia; $i+=1)
            {
                
                $moneda50Cts++;
                $diferencia -= 0.50;
            }
            echo "Se devuelven ".$moneda50Cts." monedas de 50 cts ", $diferencia,"<br/>";

            for ($i=0; $i< $diferencia; $i+=1)
            {
                
                $moneda50Cts++;
                $diferencia -= 0.50;
            }
            echo "Se devuelven ".$moneda50Cts." monedas de 50 cts ", $diferencia,"<br/>";




        ?>
    </main>
</body>
</html>