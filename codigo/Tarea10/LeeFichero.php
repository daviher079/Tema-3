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
            <?php
                $nombreFichero= $_REQUEST['fi'];
<<<<<<< HEAD
                $ruta="./FicherosTarea10/".$nombreFichero;
=======
                
>>>>>>> 8825aa7604fa0fc68fd5127a2090737a9e768c63
                if(comprobarFicheroExistente($nombreFichero)==false || empty($nombreFichero)==true)
                {
                    p("Todavia no ha creado un fichero. Para poder leer un fichero primero debe crearlo");
                }
                else{
            ?>

<<<<<<< HEAD
                <textarea name="textarea" rows="10" cols="50" readonly>
                    <?php
                        if(!$fp=fopen($ruta, 'r'))
                            {
                                echo "No se ha podido abrir el fichero";
                                exit;
                            }

                            $leo=fread($fp, filesize($ruta));
                            $leo=str_replace("\n","<br>", $leo);
                            echo $leo;
                            fclose($fp)
                    ?>
                </textarea>
=======
                <textarea name="textarea" rows="10" cols="50"></textarea>
>>>>>>> 8825aa7604fa0fc68fd5127a2090737a9e768c63
            
            <section id="botones">
                <input type="submit" name="boton" value="Editar">
            <?php
                }
            ?>            
                <a href="./EligeFichero.php">Volver</a>
            </section>
            </article>
        

        <?php
        //sizeof es igual que la funcion count
            if(sizeof($_REQUEST)>0 && isset($_REQUEST['boton']))
            {
                if($_REQUEST['boton']=='Editar')
                    header('Location: Editar.php?fi='.$_REQUEST['nombreFichero']);
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