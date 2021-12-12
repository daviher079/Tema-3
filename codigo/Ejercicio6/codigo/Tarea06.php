<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Tarea 06</title>

</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Tarea 06</h1>
    </header>
    <main>
    <?php
            echo "<div style='display:block;'>";
                echo "<div>";
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
        
                    $tabla=array();    

                    $equipos=array();   
                    echo "<table>";
                        echo "<thead>";
                        echo "<th style='font-size:1.3em;'>Equipos</th>";
                        foreach ($arrayDavid as $nombreEquipo => $datosNombreEquipo) {
                            echo"<th style='font-size:1.3em;'>",$nombreEquipo,"</th>";
                            array_push($equipos, $nombreEquipo);
                        }
                        echo"</thead>";
                        echo"<tbody>";
                        foreach ($arrayDavid as $equipoLocal => $datosEquipoLocal) {
                            echo"<tr>";
                            echo"<td style='font-size:1.3em; text-align:center; padding: 15px 25px'>",$equipoLocal,"</td>";
                            $contador=0;
                                foreach ($datosEquipoLocal as $equipoVisitante => $datosPartido) {
                                   
                                    if($equipoLocal==$equipos[$contador])
                                    {
                                        echo "<td></td>";
                                    }
                                    echo "<td>";
                                        echo"<div style='display:flex; justify-content:center; '>";
                                        echo "<div class='tdDatos resul'>R: ".$datosPartido['Resultado']."</div>";
                                        echo "<div class='tdDatos rojas'>T.R: ".$datosPartido['T. Rojas']."</div>";
                                        echo "<div class='tdDatos amarillas'>T.A: ".$datosPartido['T. Amarilla']."</div>";
                                        echo "<div class='tdDatos penal'>P: ".$datosPartido['Penaltis']."</div></div>";
                                    echo "</td>";
                                    $contador++;
                                }
                            echo"</tr>";
                            }
                        echo"</tbody>";
                    echo"</table>";

                echo"</div>";
                
                for ($p=0; $p < 5; $p++) { 
                    echo "<br/>";
                }

                $clasificacion=array();
                
                foreach ($arrayDavid as $equipoLocal => $value) {
                    $clasificacion[$equipoLocal]=array();
                    $clasificacion[$equipoLocal]['puntos']=0;
                    $clasificacion[$equipoLocal]['aFavor']=0;
                    $clasificacion[$equipoLocal]['enContra']=0;
                }
                

                
                echo "<div>";

                foreach ($arrayDavid as $equipoLocal => $DatosLocal) {
                    foreach ($DatosLocal as $equipoVisitante => $DatosPartido) {
                        $resultado=explode('-',$DatosPartido['Resultado']);
                        
                        if($resultado[0]>$resultado[1])
                        {
                            $clasificacion[$equipoLocal]['puntos']+=3;
                        }
                        elseif($resultado[0]==$resultado[1])
                        {
                            $clasificacion[$equipoLocal]['puntos']+=1;
                            $clasificacion[$equipoVisitante]['puntos']+=1;
                        }
                        else
                        {
                            $clasificacion[$equipoVisitante]['puntos']+=3;
                        }
                        $clasificacion[$equipoLocal]['aFavor']+=$resultado[0];
                        $clasificacion[$equipoLocal]['enContra']+=$resultado[1];
                        $clasificacion[$equipoVisitante]['aFavor']+=$resultado[1];
                        $clasificacion[$equipoVisitante]['enContra']+=$resultado[0];

                    }
                    
                }



                echo "<table>";
                        echo "<thead style='font-size:1.3em;'>";
                            //Hago la cabecera
                            echo "<th>Equipos</th>";
                            echo "<th>Pts.</th>";
                            echo "<th>G. Favor</th>";
                            echo "<th>G. Contra</th>";
                            echo "</thead>";
                        //Pinto los resultados y para eso recorro el array grande
                        foreach ($clasificacion as $key => $datos) {
                            
                            echo "<tr>";
                                
                                echo"<td style='font-size:1.3em; text-align:center; padding: 15px'>",$key,"</td>" ;
                                foreach ($datos as $value) {
                                    echo"<td> <div class='value'>".
                                        $value
                                    ."</div></td>";
                                }
                            echo "</tr>";   
                        }

                    echo"</table>";
                    
                      
                echo "</div>";

?>
    


    </main>
    <footer>
        <p>Footer de David</p>
        <a href="verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="../../../index.html"><img src="../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>