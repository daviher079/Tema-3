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
                $rutaFichero="./FicherosTarea10/notas.csv";
                
                if(!$fNotas=fopen($rutaFichero, 'r'))
                {
                    echo"Error no se ha podido abrir el fichero";
                    exit;
                }
                $arrayPrueba=array();
                $i=0;

                while ($linea=fgets($fNotas, filesize($rutaFichero))) {
                    $prueba=$linea."<br>";
                    $l=explode(";", $prueba);
                    for ($j=0; $j < sizeof($l) ; $j++) { 
                        
                        $arrayPrueba[$i][$j]= $l[$j];
                        echo $arrayPrueba[$i][$j], " ";
                    }
                    
                    $i++;
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