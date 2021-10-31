<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <link rel="stylesheet" href="../web-root/css/styleTarea8.css"/>
    <title>Tarea 08</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootPrincipal/imgPrincipal/LogotipoDavid.jpg"/>
        <h1>Tarea 08</h1>
    </header>
    <main>

        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Formulario de registro</h2>
            </div>
            <?php 
                require_once("./funcionesEj1-2.php");
                require_once("./validarTarea8.php");

                

                if(validarFormulario()==true)
                {
                    p("Has puesto todo correcto");
                }else
                {
                
                
            ?>
        
            <form action="<?php echo self(); ?>" method="post" name="formulario" enctype="multipart/form-data">
                <article>
                    <section >
                        <label for="alfabetico">Alfabetico</label>
                        <input type="text" name="alfabetico" id="alfabetico" size="30" placeholder="Nombre" value="
                        <?php
                            recordarAlfabetico();
                        ?>">
                        <?php
                            comprobarAlfabetico();
                        ?>
                    </section>

                    <section >
                        <label for="alfanumerico">Alfanumerico</label>
                        <input type="text" name="alfanumerico" id="alfanumerico" size="30" placeholder="Apellido" pattern="[a-zA-Z0-9]+" value="
                        <?php
                            recordarAlfanumerico();
                        ?>    
                        ">
                        <?php
                            comprobarAlfanumerico();
                        ?>
                    </section>
                    
                
                    <section id="botones">

                        <input type="submit" value="Enviar los Datos" name="enviado">

                        <input type="reset" value="Limpiar">
                    </section>
                    

                </article>
            </form>
        </div>   
        <?php
                }
        ?>
        
        

    </main>
    <footer>
        <p>Footer de David</p>
        <a href="codigoTarea06.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>