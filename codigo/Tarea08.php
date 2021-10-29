<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="../web-root/css/style.css"/>
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
            <?php require_once("./funcionesEj1-2.php")?>

            <form action="<?php echo self(); ?>" method="post" name="formulario" enctype="multipart/form-data">
                <article>
                    <section class="alfabeticoSC">
                        <label for="alfabetico">Alfabetico</label>
                        <input type="text" name="alfabetico" id="alfabetico" size="40" placeholder="Nombre">
                    </section>

                    <section class="alfabeticoOpcionalSC">
                        <label for="alfabeticoOpcional">Alfabetico Opcional</label>
                        <input type="text" name="alfabeticoOpcional" id="alfabeticoOpcional" size="40" placeholder="Nombre">
                    </section>

                    <section class="alfanumericoSC">
                        <label for="alfanumerico">Alfanumerico</label>
                        <input type="text" name="alfanumerico" id="alfanumerico" size="40" placeholder="Apellido" required pattern="[a-zA-Z0-9]+">
                    </section>

                    <section class="alfanumericoOpcionalSC">
                        <label for="alfanumericolOpcional">Alfanumerico Opcional</label>
                        <input type="text" name="alfanumericolOpcional" id="alfanumericolOpcional" size="40" placeholder="Apellido" required pattern="[a-zA-Z0-9]+">
                    </section>

                    <section class="fechaSC">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" size="40">
                    </section>

                    <section class="fechaOpcionalSC">
                        <label for="fechaOpcional">Fecha Opcional</label>
                        <input type="date" name="fechaOpcional" id="fechaOpcional" size="40">
                    </section>

                    <section class="radioObligatorioSC">
                        <label>Radio Obligatorio</label>
                        <input type="radio" name="genero" id="opcion1" value="opcion1"><label for="opcion1">Opción 1</label>
                        <input type="radio" name="genero" id="opcion2" value="opcion2"><label for="opcion2">opcion 2</label>
                        <input type="radio" name="genero" id="opcion3" value="opcion3"><label for="opcion2">opcion 3</label>
                    </section>




                </article>   
                        


                

                <!-- Input de tipo Submit -->

                <input type="submit" value="Enviar los Datos">

                <!-- Input de tipo Reset -->

                <input type="reset" value="Limpiar">
            </form>
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