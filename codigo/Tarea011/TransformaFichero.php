<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../../web-root/css/style.css"/>
    <link rel="stylesheet" href="../../web-root/css/styleTarea8.css"/>
    <title>Transforma Fichero</title>
</head>
<body>
    <header>
        <img class="logo" src="../../../web-rootIndexPrincipal/img/LogotipoDavidVicente.png"/>
        <h1>Transforma Fichero</h1>
    </header>
    <main>
        
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                
            </div>
        </div>  
        <form action="TransformaFichero.php" method="post" >
            <section id="botones" style="margin-top:35px;">
                <input type="submit" name="boton" value="Transformar">
            </section>
        </form>

        

        <?php
        
        //sizeof es igual que la funcion count
            if(sizeof($_REQUEST)>0)
            {
                if($_REQUEST['boton']=='Transformar')
                {
                    $rutaFichero="./ficheros/notas.csv";
                    
                    if(file_exists($rutaFichero)==true)
                    {
                        if(!$fNotas=fopen($rutaFichero, 'r'))
                        {
                            echo"Error no se ha podido abrir el fichero";
                            exit;
                        }
                        

                        $xml= new DOMDocument("1.0", "utf-8");
                        $xml->formatOutput =true;
                    
                        $ElementoRaiz=$xml->createElement("Alumnos");

                        $raiz=$xml->appendChild($ElementoRaiz);

                        while ($linea=fgets($fNotas, filesize($rutaFichero))) {
                            $separaLinea=trim($linea);
                            $arrayLinea=explode(";", $separaLinea);
                            
                            
                            $alumno=$xml->createElement('alumno');
                            $ElementoRaiz->appendChild($alumno);
                            
                            $nombre=$xml->createElement('Nombre', $arrayLinea[0]);
                            $alumno->appendChild($nombre);

                            $nota1=$xml->createElement('nota1', $arrayLinea[1]);
                            $alumno->appendChild($nota1);

                            $nota2=$xml->createElement('nota2', $arrayLinea[2]);
                            $alumno->appendChild($nota2);

                            $nota3=$xml->createElement('nota3', $arrayLinea[3]);
                            $alumno->appendChild($nota3);
                            
                        }

                        $xml->save("./ficheros/alumnos.xml");

                        fclose($fNotas);
                        header('Location: LeeFicheroXML.php');

                    }else
                    {
                        header('Location: LeeFicheroXML.php');
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
        ?>"><img src="../../../web-rootIndexPrincipal/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>