<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="web-root/css/style.css"/>
    <style>
        h2
        {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #d02b4d;
            font-size: 1.4em;
            margin-bottom: 25px;
        }

        section
        {
            margin-bottom: 20px;
        }

        label
        {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #d02b4d;
        }

        form 
        {    
            width:750px;  
        }

        .nochk
        {
            width:200px;
            float:left;
            padding: 10px;
        }
                
        .innochk
        {
            border-color: #d02b4d;
            color: black;
            border-style: solid;
            padding: 7px;
            border-radius: 15px;
        }

        input[type='submit'], input[type='reset']
        {
            border-color: #d02b4d;
            color: black;
            border-style: solid;
            padding: 7px;
            border-radius: 15px;
            cursor: pointer;
        }

    </style>
    <title>Index Ejemplos</title>
</head>
<body>
    <header>
        <img class="logo" src="./web-root/img/LogotipoDavid.jpg"/>
        <h1>Index Ejemplos</h1>
    </header>
    
    <main>


        <div class="content">
            <div class="title">
                <h1>DWES</h1>
                <h2>Desarrollo de aplicaciones</h2>
            </div>

            <form action="./procesa.php" method="post" name="formulario">
                <!-- Input de Texto -->

                <section>
                    <label class="nochk" for="nombre">Nombre y Apellidos:</label>
                    <input class="innochk" type="text" name="nombre" id="idNombre" size="40">
                </section>

                <section>
                    <label class="nochk" for="pass">Password:</label>
                    <input class="innochk" type="password" name="pass" id="idPass" size="40">
                </section>    
                    
                <section>
                    <label class="nochk">Genero</label>
                    <input type="radio" name="genero" id="masculino" value="masculino"><label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="femenino" value="femenino"><label for="femenino">Femenino</label>
                </section>    
                <section>
                    <label class="nochk">Ciclo</label>
                    <select name="ciclo" id="ciclo">    
                        <option value="dam">DAM</option>
                        <option value="daw">DAW</option>
                    </select> 
                </section>    
                
                <section>
                    <label class="nochk">Aficiones</label>
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
                </section>
                    
                    
                        


                <!-- Input de tipo Submit -->

                <input type="submit" value="Enviar los Datos">

                <!-- Input de tipo Reset -->

                <input type="reset" value="Limpiar">
            </form>
        </div>   
        
        
    
    


    </main>
    <footer>
        <p>Footer de David</p>
        <a href="./verCodigo.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="./web-root/img/gafas-de-sol.png" height="100px"></a>
        <a href="./LeeFicheroXML.php"><img src="./web-root/img/volver.png" height="20px"></a>
    </footer>
</body>
</html>