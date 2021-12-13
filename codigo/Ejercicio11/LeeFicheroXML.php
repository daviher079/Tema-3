<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="./web-root/css/style2.css"/>
    <title>Lee Fichero XML</title>

  
</head>
<body>
    <header>
        <img class="logo" src="./web-root/img/LogotipoDavid.jpg"/>
        <h1>Lee Fichero XML</h1>
    </header>
    <main>
        
        <div class="content">
            <div class="title">
                <h1>DWES</h1>

                <form action="LeeFicheroXML.php" method="post" >
                    <?php
                        $rutaFichero="./ficheros/alumnos.xml";

                        if(file_exists($rutaFichero)==true)
                        {
                            $xml = simplexml_load_file($rutaFichero);
                            
                            echo "<table>";
                            echo "<thead>";
                                echo "<tr>
                                    <td>Alumnos</td>
                                    <td COLSPAN='4'>Notas</td>
                                </tr>";
                            echo "</thead>";
                            echo "<tbody>";    
                            foreach ($xml as $alumno)
                            {
                                echo "<tr>";
                                echo "<td> ".$alumno->children()[0]."</td>";
                                echo "<td> ".$alumno->children()[1]."</td>";
                                echo "<td> ".$alumno->children()[2]."</td>";
                                echo "<td> ".$alumno->children()[3]."</td>";
                                echo"<td><a href='./EditarNotas.php?nombre=".$alumno->children()[0]."'>Editar</a></td>";
                            
                                echo "</tr>";

                            }
                            echo "</tbody>";
                            echo "<table>";

                        }else
                        {
                            exit;
                        }
                
                    ?>
                </form>
            </div>
        </div>  
        

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="./verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../../web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="../../index.html"><img src="../../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>