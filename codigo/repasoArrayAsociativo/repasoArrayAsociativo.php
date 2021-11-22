<?php
$arrayDavid=array(
    "Zamora CF" => array(
        "UDS Salamanca" => array(
            "Resultado" => "3-2",
            "T. Rojas" => 1,
            "T. Amarilla" => 0,
            "Penaltis" => 2 
        ),
        "Real Valladolid" => array(
            "Resultado" => "2-1",
            "T. Rojas" => 1,
            "T. Amarilla" => 0,
            "Penaltis" => 2 
        ),
        "Numancia" => array(
            "Resultado" => "2-0",
            "T. Rojas" => 1,
            "T. Amarilla" => 0,
            "Penaltis" => 2 
        )
    ),
    "UDS Salamanca" => array(
        "Zamora CF" => array(
            "Resultado" => "2-3",
            "T. Rojas" => 1,
            "T. Amarilla" => 0,
            "Penaltis" => 2 
        ),
        "Real Valladolid" => array(
            "Resultado" => "0-1",
            "T. Rojas" => 0,
            "T. Amarilla" => 2,
            "Penaltis" => 2 
        ),
        "Numancia" => array(
            "Resultado" => "0-0",
            "T. Rojas" => 3,
            "T. Amarilla" => 2,
            "Penaltis" => 0 
        )
    ),
    "Real Valladolid" => array(
        "Zamora CF" => array(
            "Resultado" => "1-2",
            "T. Rojas" => 1,
            "T. Amarilla" => 0,
            "Penaltis" => 2 
        ),
        "UDS Salamanca" => array(
            "Resultado" => "1-0",
            "T. Rojas" => 0,
            "T. Amarilla" => 2,
            "Penaltis" => 2 
        ),
        "Numancia" => array(
            "Resultado" => "1-0",
            "T. Rojas" => 0,
            "T. Amarilla" => 2,
            "Penaltis" => 0 
        )
    ),
    "Numancia" => array(
        "Zamora CF" => array(
            "Resultado" => "2-0",
            "T. Rojas" => 1,
            "T. Amarilla" => 0,
            "Penaltis" => 2
        ),
        "UDS Salamanca" => array(
            "Resultado" => "0-0",
            "T. Rojas" => 3,
            "T. Amarilla" => 2,
            "Penaltis" => 0 
        ),
        "Real Valladolid" => array(
            "Resultado" => "0-1",
            "T. Rojas" => 0,
            "T. Amarilla" => 2,
            "Penaltis" => 0  
        )
    ),
);

$resultados=array();
//Local es el equipo y datos lo que contiene 
foreach ($arrayDavid as $equipoLocal=>$arraySecundario) {
    $resultados[$equipoLocal]=array();
    $resultados[$equipoLocal]["Puntos"]=0;
    $resultados[$equipoLocal]["Favor"]=0;
    $resultados[$equipoLocal]["Contra"]=0;
    
}

echo "<pre>";
    print_r($resultados);
echo "</pre>";


foreach ($arrayDavid as $equipoLocal=>$arraySecundario) {
    foreach ($arraySecundario as $visitante => $valores) {
        $datos=explode("-",$valores["Resultado"]);

        if($datos[0]>$datos[1])
        {
            //Añado a local 3 puntos
            $resultados[$equipoLocal]["Puntos"]+=3;

        }elseif($datos[0]==$datos[1])
        {
            $resultados[$equipoLocal]["Puntos"]+=1;
            $resultados[$visitante]["Puntos"]+=1;
        }else
        {
            $resultados[$visitante]["Puntos"]+=3;
        }

        $resultados[$equipoLocal]["Favor"]+=$datos[0];
        $resultados[$equipoLocal]["Contra"]+=$datos[1];
        $resultados[$visitante]["Favor"]+=$datos[0];
        $resultados[$visitante]["Contra"]+=$datos[1];


    }
    
}

echo "<pre>";
    print_r($resultados);
echo "</pre>";



?>

<table style="border:2px black solid">
    <thead>
        <th style="border:2px black solid">Equipos</th>
        <th style="border:2px black solid">Puntos</th>
        <th style="border:2px black solid">Goles a Favor</th>
        <th style="border:2px black solid">Goles en Contra</th>
    </thead>
    <tbody>
        <?php
            foreach ($resultados as $key => $value) {
                echo "<tr>";
                    echo"<td style='border:2px black solid; text-align:center'>".$key."</td>";
                    foreach ($value as $datos) {
                        echo"<td style='border:2px black solid; text-align:center'>".$datos."</td>";
                    }
                echo"</tr>";

            }
        ?>
    </tbody>
</table>