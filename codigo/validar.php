<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
    <title>Tarea 06</title>
</head>
<body>
    <header>
        <img class="logo" src="../../web-rootPrincipal/imgPrincipal/LogotipoDavid.jpg"/>
        <h1>Autovalidar</h1>
    </header>
    <main>

        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Autovalidar</h2>
            </div>

            <?php
                require_once("./funcionesEj1-2.php");

                //Primera opcion ver si hay algo en post

                if(count($_POST)>0)
                {
                    p("El formulario ha sido enviado");

                }else
                {
                    p("No se ha enviado nada");
                }
                
                if(isset($_REQUEST['enviado']))
                {
                    p("El formulario ha sido enviado");
                    
                    if(!empty($_REQUEST['nombre']))
                    {
                        p("El nombre es ". $_REQUEST['nombre']);
                    }
                    else
                    {

                    }

                    if(!empty($_REQUEST['pass']))
                    {
                        p("La contraseña es ". $_REQUEST['pass']);
                    }
                    if(isset($_REQUEST['genero']))
                    {
                        p("El genero es ". $_REQUEST['genero']);
                    }

                    if($_REQUEST['ciclo']=='no')
                    {
                        p("Muestra ". $_REQUEST['ciclo']);
                    }

                    if(!isset($_REQUEST['aficiones']))
                    {
                        p("No ha enviado ninguna aficion");
                    }elseif(count($_REQUEST['aficiones'])>=3)
                    {
                        p("Debe elegir como mucho 3");
                    }

                    //La variables superglobal que guarda los ficheros es $_FILES
                
                    //print_r($_FILES);
                    if(isset($_FILES))
                    {
                        $guarda="../upload/";
                        $rutaConNombre=$guarda.$_FILES['fichero']['name'];
                        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $rutaConNombre))
                        {
                            p("Guardado");        
                        }else
                        {
                            p("Error");
                        }

                        $rutaimagen=$guarda.$_FILES['fichero']['name'];
                        
                        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $rutaimagen))
                        {
                            echo "<img src='".$rutaimagen."'>";       
                        }else
                        {
                            p("Error");
                        }
                    }

                    
                }
                
                /*if(isset($_REQUEST['enviado']))
                {
                    p("Has puesto todo correcto");
                }else
                {*/

                
                
            ?>


            <form action="<?php echo self(); ?>" method="post" name="formulario" enctype="multipart/form-data">
                <!-- Input de Texto -->

                <p>

                    <label for="nombre">Nombre y Apellidos:</label>
                    <input type="text" name="nombre" id="idNombre" size="40" value="
                    <?php
                        if(!empty($_REQUEST['nombre'])&& isset($_REQUEST['enviado']))
                        {
                            echo $_REQUEST['nombre'];
                        }
                    ?>
                    ">
                    
                    <?php
                        if(empty($_REQUEST['nombre'])&& isset($_REQUEST['enviado'])){
                    ?>
                        <label for="nombre" style="color:red;">Debe haber un nombre</label>
                    <?php
                        }
                    ?>        
                    <label for="pass">Password:</label>

                    <input type="password" name="pass" id="idPass" size="40">
                    <br>
                    <label>Genero</label>

                    <input type="radio" name="genero" id="masculino" value="masculino"><label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="femenino" value="femenino"><label for="femenino">Femenino</label>
                    <br>
                    <label>Ciclo</label>

                    <select name="ciclo" id="ciclo">   
                        <option value="no">Seleccione una opcion</option> 
                        <option value="dam">DAM</option>
                        <option value="daw">DAW</option>
                    </select>    
                    <br>
                    <label>Aficiones</label>
                    <label for="futbol">Futbol</label>
                    <input type="checkbox" name="aficiones[]" id="futbol" value="futbol">
                    <label for="bar">Bar</label>
                    <input type="checkbox" name="aficiones[]" id="bar" value="bar">
                    <label for="gimnasio">Gimnasio</label>
                    <input type="checkbox" name="aficiones[]" id="gimnasio" value="gimnasio">
                    <label for="padel">Padel</label>
                    <input type="checkbox" name="aficiones[]" id="padel" value="padel">
                    <label for="dormir">dormir</label>
                    <input type="checkbox" name="aficiones[]" id="dormir" value="dormir">
                        
                    <input type="file" name="fichero" id="fichero">

                </p>

                <!-- Input de tipo Submit -->

                <input type="submit" value="Enviar los Datos" name="enviado">

                <!-- Input de tipo Reset -->

                <input type="reset" value="Limpiar">
            </form>

            <?
            /*
                }
            */
            ?>
        </div>   


        
        
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