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
        table
        {
            margin-left:50px;
            border:2px #C823DE solid;
            width:500px;
        }

        thead
        {
            border:2px #C823DE solid;
        }

        tr
        {
            border:2px #C823DE solid;
            text-align:center;
        }

        td
        {
            padding:7px 15px;
            border:2px #C823DE solid;
            
        }

        a
        {
            text-decoration:none;
            color:#d02b4d;
        }

        a:hover
        {
            color: rgba(208, 43, 77, 0.5);
        }

    </style>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootIndexPrincipal/img/LogotipoDavidVicente.png"/>
        <h1>Elige Fichero</h1>
    </header>
    <main>
        <?php
            require_once("./validaElegirFIchero.php");
        ?>
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Elige Fichero</h2>
                
            </div>
        </div>  
        <form action="NotasAlumnos.php" method="post" >
            <?php
                require_once("../funcionesEj1-2.php");
                $rutaFichero="./FicherosTarea10/notas.csv";

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
                        echo "<tr><td>Alumnos</td><td style='border-right:none;'>Notas</td></tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    for ($i=0; $i <sizeof($arrayPrueba) ; $i++) { 
                                echo "<tr>";
                                    for ($j=0; $j < sizeof($arrayPrueba[$i]) ; $j++) { 
                                        echo"<td>".$arrayPrueba[$i][$j]."</td>";
                                    }
                                    echo"<td><a href='./EditarNotas.php?nombre=".$arrayPrueba[$i][0]."'>Editar</a></td>";
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