<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <?

            //Escribe un programa que pida por pantalla el tamaño de una matriz (Ej lado=4). Rellene de la siguiente manera

            $lado=$_GET['lado'];
            

            $tabla=array();

            for ($i=0; $i < $lado; $i++) { 
                $tabla[$i]=array();
                for ($j=0; $j < $lado; $j++) { 
                    if($j==0)
                        echo $tabla[$i][$j]=1;
                    else
                        echo $tabla[$i][$j]= 0;   
                }
                echo "<br>";
            }
        ?>
    </main>
</body>
</html>