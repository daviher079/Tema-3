<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../../web-root/css/style2.css"/>
    <title>Lee Fichero</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-root/img/LogotipoDavid.jpg"/>
        <h1>Lee Fichero</h1>
    </header>
    <main>
        <?php
            require_once("./validaElegirFIchero.php");


            require_once("../Funciones.php");

        ?>
        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Lee Fichero</h2>
            </div>
            <form action="EditaFichero.php" method="post">
            <input type="hidden" name="fi" value="<?php echo $_REQUEST['fi'];?>">
            <?php

                $nombreFichero= $_REQUEST['fi'];

                $ruta="../../FicherosTarea10/".$nombreFichero;

                if(comprobarFicheroExistente($nombreFichero)==false || empty($nombreFichero)==true)
                {
                    p("Todavia no ha creado el fichero. Para poder leer un fichero primero debe crearlo");
                }
                else{
            ?>

            <textarea name="textarea" rows="10" cols="50" readonly><?php
                    if(!$fp=fopen($ruta, 'r'))
                    {
                        echo "No se ha podido abrir el fichero";
                        exit;
                    }

                    $leo=fread($fp, filesize($ruta));
                    $leo=str_replace("\n","<br>", $leo);
                    echo $leo;
                    fclose($fp)
                ?></textarea>

            <section id="botones">
                <input type="submit" name="boton" value="Editar">
            <?php
                }
            ?>            
                <a href="./EligeFichero.php"><img src="../../web-root/img/volver.png" height="20px"></a>

            </section>

            </form>

        </div>  

        <?php
        //sizeof es igual que la funcion count

            

            if(sizeof($_REQUEST)>0 && isset($_REQUEST['boton']))
            {
                if($_REQUEST['boton']=='Editar')
                    header('Location: EditaFichero.php?fi='.$_REQUEST['fi']);

            }
        ?>
           
        

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