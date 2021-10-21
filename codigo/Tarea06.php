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

        $arrayDavid=array(
            "Zamora CF" => array(
                "UDS Salamanca" => array(
                    "Resultado" => "2 - 3",
                    "T. Rojas" => 1,
                    "T. Amarilla" => 0,
                    "Penaltis" => 2 
                ),
                "Real Valladolid" => array(
                    "Resultado" => "2 - 1",
                    "T. Rojas" => 1,
                    "T. Amarilla" => 0,
                    "Penaltis" => 2 
                ),
                "Numancia" => array(
                    "Resultado" => "2 - 0",
                    "T. Rojas" => 1,
                    "T. Amarilla" => 0,
                    "Penaltis" => 2 
                )
            ),
            "UDS Salamanca" => array(
                "Zamora" => array(
                    "Resultado" => "2 - 3",
                    "T. Rojas" => 1,
                    "T. Amarilla" => 0,
                    "Penaltis" => 2 
                ),
                "Real Valladolid" => array(
                    "Resultado" => "0 - 1",
                    "T. Rojas" => 0,
                    "T. Amarilla" => 2,
                    "Penaltis" => 2 
                ),
                "Numancia" => array(
                    "Resultado" => "0 - 0",
                    "T. Rojas" => 3,
                    "T. Amarilla" => 2,
                    "Penaltis" => 0 
                )
            ),
            "Real Valladolid" => array(
                "Zamora" => array(
                    "Resultado" => "1 - 2",
                    "T. Rojas" => 1,
                    "T. Amarilla" => 0,
                    "Penaltis" => 2 
                ),
                "Salamanca" => array(
                    "Resultado" => "1 - 0",
                    "T. Rojas" => 0,
                    "T. Amarilla" => 2,
                    "Penaltis" => 2 
                ),
                "Numancia" => array(
                    "Resultado" => "1 - 0",
                    "T. Rojas" => 0,
                    "T. Amarilla" => 2,
                    "Penaltis" => 0 
                )
            ),

            "Numancia" => array(
                "Zamora" => array(
                    "Resultado" => "2 - 0",
                    "T. Rojas" => 1,
                    "T. Amarilla" => 0,
                    "Penaltis" => 2
                ),
                "Salamanca" => array(
                    "Resultado" => "0 - 0",
                    "T. Rojas" => 3,
                    "T. Amarilla" => 2,
                    "Penaltis" => 0 
                ),
                "Real Valladolid" => array(
                    "Resultado" => "0 - 1",
                    "T. Rojas" => 0,
                    "T. Amarilla" => 2,
                    "Penaltis" => 0  
                )
            ),

        );

        echo "<table>";
        echo "<thead>";
        //Hago la cabecera
        echo "<td>Equipos</td>";
        foreach ($arrayDavid as $keyLocales => $valueLocales) {
            
                echo "<td>";
                    echo $keyLocales;
                echo"</td>";
        }
        echo "</thead>";
        //Pinto los resultados y para eso recorro el array grande

        foreach ($arrayDavid as $key => $value) {
            echo "<tr>";
                echo"<td>",$key,"</td>" ;
                foreach($value as $key2 => $value2){
                    
                    echo "<td>";
                        foreach($value2 as $key3 => $value3)
                        {
                            
                            echo $value3;
                            
                        }
                    echo "</td>";
                }
            echo "</tr>";    
        }




        echo"</table>";
       
       
        



        /*$equipos=array( "Zamora CF", "UDS Salamanca", "Real Valladolid", "Numancia");

        $tabla=array();
        echo "<table style='border: solid; padding: 20px;'>";
        
        for ($i=0; $i <count($equipos) ; $i++) { 
            $tabla[$i]=array();
            echo "<tr style='border: solid;'>";
            for ($j=0; $j < count($equipos) ; $j++) 
            {
                if($i==0 &$j==0)
                {
                    echo "<td style='padding: 20px;'>",$tabla[$i][$j]="Equipos", "</td>";
                } 
                elseif($i==0)
                {
                    echo "<td style='padding: 20px;'>",$tabla[$i][$j]=$equipos[$j], "</td>";
                }elseif($j==0)
                {
                    echo "<td style='padding: 20px;'>",$tabla[$i][$j]=$equipos[$i], "</td>";
                    
                }
            }
            echo "</tr>";
        }
        echo "</table>";*/
    ?>

    </main>
    <footer>
        <p>Footer de David</p>
    </footer>
</body>
</html>