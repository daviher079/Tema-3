<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <link rel="stylesheet" href="../web-root/css/styleTarea8.css"/>
    <title>Lectura de fichero</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootIndexPrincipal/img/LogotipoDavidVicente.png"/>
        <h1>Lectura de fichero</h1>
    </header>
    <main>

        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Lectura de fichero</h2>
            </div>

            <?php
                $rutaFichero="./ficheros/blocDeNotas.txt";
            /*

                //Abrir el fichero para escritura
                if(!$fp=fopen($rutaFichero, 'w'))
                {
                    echo "No se ha podido abrir el fichero";
                    exit;
                }
                $texto="Quiero matar a Ismael por poner .length y lalala y hector tambien";
                fwrite($fp, $texto, strlen($texto));
                fclose($fp);

                //Abrir el fichero para escribir al final
                if(!$fp=fopen($rutaFichero, 'a'))
                {
                    echo "No se ha podido abrir el fichero";
                    exit;
                }
                $texto="\n Escribo al final";
                fwrite($fp, $texto, strlen($texto));
                fclose($fp);
                */
                
                //Abrir el fichero para leer al final
                
                /*if(!$fp=fopen($rutaFichero, 'r'))
                {
                    echo "No se ha podido abrir el fichero";
                    exit;
                }

                $leo=fread($fp, filesize($rutaFichero));
                $leo=str_replace("\n","<br>", $leo);
                echo $leo;
                fclose($fp)*/

                //Modificar un fichero
                $rutaFicheroInicial="./ficheros/fichero1.txt";

                if(!$fInicial=fopen($rutaFicheroInicial,'r'))
                {
                    echo "Ha habido un error y no se ha abierto el fichero";
                    exit;
                }

                if(!$fTemp=fopen("./ficheros/temporal.txt",'w'))
                {
                    echo "Ha habido un error y no se ha abierto el fichero";
                    exit;
                }

                //fgets lee linea a linea
                $c=0;    
                while($linea=fgets($fInicial, filesize($rutaFicheroInicial)))
                {
                    //echo $c, ": ",$linea,"<br>";
                    //$c++;
                    if(trim($linea)=='canales')
                        $linea="David\n";
                    
                    fwrite($fTemp, $linea, strlen($linea));

                }

                fclose($fInicial);
                fclose($fTemp);
                //reemplazamos el fichero inicial y renombramos el fichero temporal
                
                unlink($rutaFicheroInicial);
                rename("./ficheros/temporal.txt",$rutaFicheroInicial);
                //Añadir alumnos con notas en el examen     

            ?>

        </div>    
           
        

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