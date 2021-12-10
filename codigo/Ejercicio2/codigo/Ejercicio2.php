<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Ejercicio 2</title>
</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Ejercicio 2</h1>
    </header>
    <main class="ejercicios1y2">
    <?

        //Escribe un programa que dado un array ordénalo y devuelve otro array sin que haya elementos repetidos

        $ejercicio1=array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

        echo "<p>Array inicial. </p>";
        foreach ($ejercicio1 as $key) {
            echo " <span>".$key, " </span>";
        }

        echo "<p>Array ordenado. Con la funcion sort() </p>";
        echo sort($ejercicio1);
        
        foreach ($ejercicio1 as $key ) {
            echo $key, " ";
        }


        echo "<p>Array limpio sin repeticiones. </p>";

        $prueba=array_unique($ejercicio1);


        foreach ($prueba as $key ) {
            echo $key, " ";
        }

        echo "<p> Array con las claves ordenadas</p>";
        
        sort($prueba);

        echo "<pre>";
            print_r($prueba);
        echo "</pre>"; 

        //Ejercicio 2
        //Escribe un programa que dado un array devuelva la posición donde haya el valor 3 y cambie el valor por el número de la posición

        $ejercicio2=array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

        define("TRES", 3);
        
        echo "<p>Se pisa siempre el valor 3 por la posicion que ocupa en el array</p>";

        foreach($ejercicio2 as $key => $value)
        {
            
            if(TRES==$value)
                $ejercicio2[$key]=$key;
        }

        echo "<pre>";
            print_r($ejercicio2);
        echo "</pre>"; 
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