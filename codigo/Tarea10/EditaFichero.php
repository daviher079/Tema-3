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
            require_once("../funcionesEj1-2.php");
        ?>
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Elige Fichero</h2>
            </div>
        </div> 

        <form action="EditaFichero.php" method="post">
           <?php
            //require_once("./CodigoEditaFichero.php"); 
            $rutaFichero="./FicherosTarea10/".$_REQUEST['fi'];
            $rutaFicheroTemp="./FicherosTarea10/temp.txt";

            
                //echo $rutaFichero;
                //echo $rutaFicheroTemp;
                if(file_exists($rutaFichero)==true)
                {
                    if(!$fInicial=fopen($rutaFichero,'r'))
                    {
                        echo "Ha habido un error  y no se ha abierto el fichero";
                        exit;
                    }

                    if(!$fTemp=fopen($rutaFicheroTemp,'w'))
                    {
                        echo "Ha habido un error y no se ha abierto el fichero";
                        exit;
                    }
            ?>
                <textarea name="textarea" rows="10" cols="50"><?php
                    while($linea=fgets($fInicial, filesize($rutaFichero)))
                    {
                        echo $linea;
                        fwrite($fTemp, $linea, strlen($linea));
                    }
            ?></textarea>
            <?php              
                    
                }
            ?>
        </form>    
           
         
            <section id="botones">
                <input type="submit" name="boton" value="Modificar">

           
            <textarea name="textarea" rows="10" cols="50"></textarea>
         
            <section id="botones">
                <input type="submit" name="boton" value="Editar">

                <a href="./EligeFichero.php">Volver</a>
            </section>
            </article>
        

        <?php
        //sizeof es igual que la funcion count


            if(sizeof($_REQUEST)>0 && isset($_REQUEST['boton']))
            {
                
                if($_REQUEST['boton']=='Modificar')
                {
                    
                    $text = trim($_REQUEST['textarea']); 
                    $textArea = explode("\n", $text); 
                    fwrite($fTemp, $textArea, strlen($textArea));    
                
                    

                    unlink($rutaFichero);
                    rename($rutaFicheroTemp,$rutaFichero);
                    fclose($rutaFichero);
                    fclose($rutaFicheroTemp);
                    //header('Location: ./LeeFichero.php?fi2='.$_REQUEST['fi']);
                }
            }else
            {
                $text = $_REQUEST['textarea']; 
                echo $_POST['textarea'];

            if(sizeof($_REQUEST)>0 && isset($_REQUEST['boton']))
            {
                if($_REQUEST['boton']=='Editar')
                    header('Location: Editar.php?fi='.$_REQUEST['nombreFichero']);

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