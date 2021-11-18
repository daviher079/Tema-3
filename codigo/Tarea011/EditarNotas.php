<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../../web-root/css/style.css"/>
    <link rel="stylesheet" href="../../web-root/css/styleTarea8.css"/>
    <title>Elige Fichero</title>

    <style>
        a
        {
            text-decoration:none;
            color:#d02b4d;
        }

        a:hover
        {
            color: rgba(208, 43, 77, 0.5);
        }
        label
        {
            margin-right:20px;
        }

    </style>
    
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootIndexPrincipal/img/LogotipoDavidVicente.png"/>
        <h1>Elige Fichero</h1>
    </header>
    <main>
        
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Editar Notas</h2>
                
            </div>
        </div> 
         
        <form action="EditarNotas.php" method="post">
        <input type="hidden" name="nombre" value="<?php echo $_REQUEST['nombre'];?>">
        <?php
            
            $nombreAlumno = $_REQUEST['nombre'];
            $rutaFichero="./ficheros/alumnos.xml";

            if(file_exists($rutaFichero)==true)
            {
                

                $xml=simplexml_load_file($rutaFichero);

                foreach ($xml as $alumno) {
                    
                    if($alumno->children()[0]==$nombreAlumno)
                    {
                        echo "<label style='color:red; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>".$nombreAlumno."</label>";
    
                        echo "<input type='number' id='notaUno' name='notaUno' value='".$alumno->children()[1]."' min='0' max='10'>";

                        echo "<input type='number' id='notaDos' name='notaDos' value='".$alumno->children()[2]."' min='0' max='10'>";

                        echo "<input type='number' id='notaTres' name='notaTres' value='".$alumno->children()[3]."' min='0' max='10'>";
                    }
                }

            }
            else
            {
               exit;
            }    
            
        ?>

            <section id="botones" style="margin-top:35px;">
                <input type="submit" name="boton" value="Guardar">
                <a href="./NotasAlumnos.php">Volver</a>
            </section>
        </form>    
        
        <?php
            if(sizeof($_REQUEST)>0 && isset($_REQUEST['boton']))
            {
                if($_REQUEST['boton']=='Guardar')
                {
                    if(file_exists($rutaFichero)==true)
                    {
                        $xml = simplexml_load_file($rutaFichero);
                        
                        $dom = dom_import_simplexml($xml)->ownerDocument;
                        $elemento = $dom->getElementsByTagName("Nombre");

                        // Recorro cada elemento con la etiqueta <Deporte>

                        foreach($elemento as $nombreAlumno)
                        {
                            if($nombreAlumno->nodeValue==$_REQUEST['nombre'])
                            {
                                $aux = $nombreAlumno;
                                do
                                {
                                    $aux = $aux->nextSibling;
                                }while($aux->nodeName != "nota1");

                                $aux->nodeValue = 1;
                                $aux->setAttribute("Modificado", "true");
                            }
                        }



                        // Se guardan los cambios

                        $dom->save($rutaFichero);
                        
                        $lineaModificada=$_REQUEST['nombre'].";".$_REQUEST['notaUno'].";".$_REQUEST['notaDos'].";".$_REQUEST['notaTres']." ";
                        
                        while($linea2=fgets($fNotas, filesize($rutaFichero)))
                        {
                            $lineaAModificar=trim($linea2);
                            $nombreAlumnoF=explode(";", $lineaAModificar);
                            if($nombreAlumnoF[0]==$_REQUEST['nombre'])
                                $linea2=$lineaModificada."\n";

                            fwrite($fNotasTemp, $linea2, strlen($linea2));

                        }


                        
                        
                        fclose($fNotas);
                        fclose($fNotasTemp);
                        
                        
                        unlink($rutaFichero);
                        rename($rutaFicheroTemp,$rutaFichero);

                        header('Location: ./NotasAlumnos.php');
                            
                    }else
                    {
                        exit;
                    }
                }
            }    
        ?>   
        

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="codigoTarea06.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../../web-rootIndexPrincipal/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>