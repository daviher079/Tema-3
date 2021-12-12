<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style2.css"/>
    <title>Notas Alumnos</title>
</head>
<body>
    <header>
        <img class="logo" src="../web-root/img/LogotipoDavid.jpg"/>
        <h1>Notas Alumnos</h1>
    </header>
    <main>
        
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Notas Alumnos</h2>
                
            </div>
            <form action="NotasAlumnos.php" method="post" >
            <?php
                require_once("./validaElegirFIchero.php");
                require_once("./Funciones.php");
                $rutaFichero="../FicherosTarea10/notas.csv";

                if(file_exists($rutaFichero)==true)
                {
                    if(!$fNotas=fopen($rutaFichero, 'r'))
                    {
                        echo"Error no se ha podido abrir el fichero";
                        exit;
                    }
                    $arrayPrueba=array();
                    $i=0;

                    while ($linea=fgets($fNotas, filesize($rutaFichero))) {
                        $separaLinea=$linea."<br>";
                        $arrayLinea=explode(";", $separaLinea);
                        for ($j=0; $j < sizeof($arrayLinea) ; $j++) { 
                            
                            $arrayPrueba[$i][$j]= $arrayLinea[$j];
                            
                        }
                        
                        $i++;
                    }

                    echo "<table>";
                    echo "<thead>";
                        echo "<tr><td>Alumnos</td><td COLSPAN='4'>Notas</td></tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    for ($i=0; $i <sizeof($arrayPrueba) ; $i++) { 
                                echo "<tr>";
                                    for ($j=0; $j < sizeof($arrayPrueba[$i]) ; $j++) { 
                                        echo"<td>".$arrayPrueba[$i][$j]."</td>";
                                    }
                                    echo"<td class='miA'><a href='./EditarNotas.php?nombre=".$arrayPrueba[$i][0]."'>Editar</a></td>";
                                echo"</tr>";
                            }
                    echo "</tbody>";
                    echo "<table>";
                    
                    fclose($fNotas);
                }else
                {
                    p("Error el fichero no existe.");
                }
                
                
            ?>
        </form>

        

        <?php
        //sizeof es igual que la funcion count
            if(sizeof($_REQUEST)>0)
            {
                if($_REQUEST['boton']=='Editar')

                    header('Location: EditaFichero.php?fi='.$_REQUEST['nombreFichero']);

                if($_REQUEST['boton']=='Leer')
                    header('Location: LeeFichero.php?fi='.$_REQUEST['nombreFichero']);    

            }
        ?>
        </div>  
       
           
        

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="../index.html"><img src="../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>