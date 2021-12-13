<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../../web-root/css/style2.css"/>
    <title>Elige Fichero</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-root/img/LogotipoDavid.jpg"/>
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
            <form action="EligeFichero.php" method="post" >
            <article>
            <section>
                <label for="nombreFichero">Nombre fichero:</label>
                <input type="text" name="nombreFichero" id="nombreFichero" size="30" placeholder="Nombre">
                <?php
                    comprobarGenerico("nombreFichero");
                ?>
            </section>
            <section id="botones">
                <input type="submit" name="boton" value="Editar">
                <input type="submit" name="boton" value="Leer">
            </section>
            </article>
        </form>
        </div>  
        

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
        <a href="./verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../../web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="../../index.html"><img src="../../web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>