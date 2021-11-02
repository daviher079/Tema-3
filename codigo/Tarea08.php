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
                    p("El campo alfabetico es: ".$_REQUEST['alfabetico']); 
                    validarAlfabeticoOpc();
                    p("El campo alfanumerico es: ".$_REQUEST['alfanumerico']);   
                    validarAlfanumericoOpc();
                    p("El campo fecha es: ".$_REQUEST['fecha']);
                    validarFechaOpc();
                    p("El campo opcion es: ".$_REQUEST['opcion']);
                }else
                {
                
                
            ?>
        
            <form action="<?php echo self(); ?>" method="post" name="formulario" enctype="multipart/form-data">
                <article>
                    <section>
                        <label for="alfabetico">Alfabetico</label>
                        <input type="text" name="alfabetico" id="alfabetico" size="30" placeholder="Nombre" value="<?php
                            recordargenerico("alfabetico");
                        ?>">
                        <?php
                            comprobarGenerico("alfabetico");
                        ?>
                    </section>

                    <section >
                        <label for="alfabeticoOpcional">Alfabetico Opcional</label>
                        <input type="text" name="alfabeticoOpcional" id="alfabeticoOpcional" size="30" placeholder="Nombre" value="<?php
                            recordarGenerico("alfabeticoOpcional");
                        ?>">
                    </section>

                    <section>
                        <label for="alfanumerico">Alfanumerico</label>
                        <input type="text" name="alfanumerico" id="alfanumerico" size="30" placeholder="Apellido" pattern="[a-zA-Z0-9]+" value="<?php
                            recordargenerico("alfanumerico");
                        ?>">
                        <?php
                            comprobarGenerico("alfanumerico");
                        ?>
                    </section>

                    <section>
                        <label for="alfanumericoOpcional">Alfanumerico Opcional</label>
                        <input type="text" name="alfanumericoOpcional" id="alfanumericoOpcional" size="30" placeholder="Apellido" pattern="[a-zA-Z0-9]+"
                        value="<?php
                            recordarGenerico("alfanumericoOpcional");
                        ?>">
                    </section>

                    <section>
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" size="30"
                        value="<?php
                            recordarGenerico("fecha");
                        ?>">

                        <?php
                            comprobarGenerico("fecha");
                        ?>
                    </section>

                    <section>
                        <label for="fechaOpcional">Fecha Opcional</label>
                        <input type="date" name="fechaOpcional" id="fechaOpcional" size="30"
                        value="<?php
                            recordarGenerico("fechaOpcional");
                        ?>">
                    </section>

                    <section>
                    <label>Radio Obligatorio:</label><br>
                    <input type="radio" name="opcion" id="opcion1" value="opcion1" ><label for="opcion1" <?php ?>>Opción 1</label>
                    <input type="radio" name="opcion" id="opcion2" value="opcion2"><label for="opcion2">Opción 2</label>
                    <input type="radio" name="opcion" id="opcion3" value="opcion3"><label for="opcion3">Opción 3</label>
                    <?php
                        comprobarGenerico("opcion");
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