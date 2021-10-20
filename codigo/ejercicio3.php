<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <title>Ejercicio 3</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootPrincipal/imgPrincipal/LogotipoDavid.jpg"/>
        <h1>Ejercicio 3</h1>
    </header>
    <main>
    <?

//Escribe un programa que pida por pantalla el tamaño de una matriz (Ej lado=4). Rellene de la siguiente manera

$lado=$_GET['lado'];


$tabla=array();
echo "<table style='border: solid; padding: 20px;'>";
for ($i=0; $i < $lado; $i++) { 
    $tabla[$i]=array();
    echo "<tr style='border: solid;'>";
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
    </footer>
</body>
</html>