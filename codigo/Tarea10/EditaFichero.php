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
            <input type="hidden" name="fi" value="<?php echo $_REQUEST['fi'];?>">
           <?php
            
            $rutaFichero="./FicherosTarea10/".$_REQUEST['fi'];
            $rutaFicheroTemp="./FicherosTarea10/temp.txt";

                if(file_exists($rutaFichero)==true)
                {
                    if(!$fInicial=fopen($rutaFichero,'r'))
                    {
                        echo "Ha habido un error  y no se ha abierto el fichero";
                        exit;
                    }
            ?>
                <textarea name="textarea" rows="10" cols="50"><?php
                    while($linea=fgets($fInicial, filesize($rutaFichero)))
                    {
                        echo $linea;
                    }
                ?></textarea>
            <?php              
                    
                }else
                {
                    if(!$fInicial=fopen($rutaFichero,'w'))
                    {
                        echo "Ha habido un error y no se ha abierto el fichero";
                        exit;
                    }
            ?>
                <textarea name="textarea" rows="10" cols="50"></textarea>

            <?php
                }
            ?>
           
           <section id="botones">
               <input type="submit" name="boton" value="Guardar">
               
               <a href="./EligeFichero.php">Volver</a>
            </section>
        
        </form>    
        

        <?php
        //sizeof es igual que la funcion count

            if(sizeof($_REQUEST)>0 && isset($_REQUEST['boton']))
            {
                if($_REQUEST['boton']=='Guardar')
                {
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

                        $text = trim($_REQUEST['textarea']); 
                    
                        fwrite($fTemp, $text, strlen($text));    
                    
                        fclose($fTemp);
                        fclose($fInicial);

                        unlink($rutaFichero);
                        rename($rutaFicheroTemp,$rutaFichero);
                        header('Location: ./LeeFichero.php?fi='.$_REQUEST['fi']);
                    
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