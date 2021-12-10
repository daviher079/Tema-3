<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Ejercicio 3</h1>
    </header>
    <main>
    <?

echo "<p style='margin-bottom:30px;'>Escribe un programa que pida por pantalla el tamaño de una matriz (Ej lado=4). Rellene de la siguiente manera</p>";

$lado=$_GET['lado'];


$tabla=array();
echo "<table style='border: solid; padding: 20px; color: #d02b4d;'>";
for ($i=0; $i < $lado; $i++) { 
    $tabla[$i]=array();
    echo "<tr style='border: solid; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>";
    for ($j=0; $j < $lado; $j++) { 
        if($i==0 || $j==0)
            echo "<td style='padding: 20px;'>", $tabla[$i][$j]=1, "</td>";
        else
            echo "<td style='padding: 20px;'>", $tabla[$i][$j]= $tabla[$i-1][$j] + $tabla[$i][$j-1] , "</td>";   
    }
    echo "</tr>";
}
echo "</table>";
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