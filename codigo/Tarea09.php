<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <link rel="stylesheet" href="../web-root/css/styleTarea8.css"/>
    <title>Tarea 09</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootIndexPrincipal/img/LogotipoDavidVicente.png"/>
        <h1>Tarea 09</h1>
    </header>
    <main>

        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Formulario de registro</h2>
            </div>
            <?php 
                require_once("./funcionesEj1-2.php");
                require_once("./validarTarea09.php");

                if(validarFormulario()==true)
                {
                    //Se muestran los datos cargados en los inputs
                    p("El campo nombre es: ".$_REQUEST['nombre']); 
                    
                    p("El campo apellidos es: ".$_REQUEST['apellidos']);  
                    
                    p("El campo fecha es: ".$_REQUEST['fecha']);

                    p("El DNI es: ".$_REQUEST['dni']);

                    p("El correo electronico es ".$_REQUEST['correo']);
                    
                    
                }else
                {
                    
                    
            ?>
        
            <form action="<?php echo self(); ?>" method="post" name="formulario" enctype="multipart/form-data">
                <article>
                    <section>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" size="30" placeholder="Nombre" value="<?php
                            recordargenerico("nombre"); 
                        ?>">
                        <?php
                            //Se comprueba que la cadena sea correcta segun la expresión regular
                            if(isset($_REQUEST['enviado']) && expresionGenerico(PATRONNOMBRE, $_REQUEST['nombre'])==false)
                            {
                                label("El nombre introducido no es valido. Minimo 3 caracteres<br>");
                            }
                            //En caso de estar vacio el input se informa al usuario de que debe rellenarlo
                            comprobarGenerico("nombre");
                            
                        ?>
                    </section>

                    <section>
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" size="30" placeholder="Apellido" value="<?php
                            recordargenerico("apellidos");
                        ?>">
                        <?php
                            //Se comprueba que la cadena sea correcta segun la expresión regular
                            if(isset($_REQUEST['enviado']) && expresionGenerico(PATRONAPELLIDOS, $_REQUEST['apellidos'])==false)
                            {
                                label("Los apellidos introducidos no son validos. Deben tener 3 caracteres cada apellido<br>");
                            }
                            //En caso de estar vacio el input se informa al usuario de que debe rellenarlo
                            comprobarGenerico("apellidos");
                            
                        ?>
                    </section>

                    <section>
                        <label for="fecha">Fecha:</label>
                        <input type="text" name="fecha" id="fecha" size="30" placeholder="Fecha"
                        value="<?php
                            recordarGenerico("fecha");
                        ?>">

                        <?php
                            //Se comprueba que la cadena sea correcta segun la expresión regular
                            if(isset($_REQUEST['enviado']) && expresionGenerico(PATRONFECHA, $_REQUEST['fecha'])==true)
                            {
                                //Si está bien formada la fecha compruebo que el usuario no sea menor de edad
                                if(calcularEdad()==true)
                                {
                                    label("El usuario es menor de edad");
                                }
                                
                            }elseif(isset($_REQUEST['enviado'])) 
                            {
                                //Se ejecuta cuando la fecha no está bien formada y se informa al usuario de cual es el formato correcto
                                label("La fecha debe ser introducida en uno de los siguientes formatos dd/mm/yyyy o dd-mm-yyyy<br>");
                            }
                            

                            comprobarGenerico("fecha");
                        ?>
                    </section>

                    <section>
                        <label for="dni">DNI:</label>
                        <input type="text" name="dni" id="dni" size="30" placeholder="DNI"
                        value="<?php
                            recordarGenerico("dni");
                        ?>">

                        <?php
                            echo validarCorreo();
                            if(isset($_REQUEST['enviado']) && expresionGenerico(PATRONDNI, $_REQUEST['dni'])==true)
                            {
                                
                                if(calculardni($_REQUEST['dni'])==false)
                                {
                                    label("El DNI introducido es incorrecto la letra no se corresponde.<br>");
                                }
                                
                            }elseif(isset($_REQUEST['enviado'])) 
                            {
                                label("El DNI debe contener obligatoriamente 8 numeros y una letra <br>");
                            }

                            comprobarGenerico("dni");
                        ?>
                    </section>

                    <section>
                        <label for="correo">Correo Electronico:</label>
                        <input type="text" name="correo" id="correo" size="30" placeholder="Correo Electronico"
                        value="<?php
                            recordarGenerico("correo");
                        ?>">

                        <?php
                        
                            if(isset($_REQUEST['enviado']) && expresionGenerico(PATRONCORREO, $_REQUEST['correo'])==false)
                            {
                                if(expresionGenerico(PATRONCORREO, $_REQUEST['correo'])==false)
                                {

                                    echo"hola"; 
                                }
                                label("El correo debe estar formado por 1 o mas caracteres una @ 1 o mas caracteres y 2 o mas caracteres<br>");
                            }
                            comprobarGenerico("correo");
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
        ?>"><img src="../../web-rootIndexPrincipal/img/gafas-de-sol.png" height="100px"></a>
    </footer>
</body>
</html>