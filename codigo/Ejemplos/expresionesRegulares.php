<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web-root/css/resetCSS.css"/>
    <link rel="stylesheet" href="web-root/css/style.css"/>
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
                <h2>Expresiones Regulares</h2>
            </div>

            <?php
                $patron='/Holo/';
                echo preg_match($patron, "Hola me llamo Julian"), "<br>";

                echo "Punto comodin <br>";
                $patron='/log./';
                echo preg_match($patron, "log");
                echo preg_match($patron, "log3");
                echo preg_match($patron, "log21");
                echo preg_match($patron, "loga");

                echo "<br>Espacio probar con \s <br>";
                $patron='/a\sa/';
                echo preg_match($patron, "Maria a casa");
                echo preg_match($patron, "aa");

                echo "<br>Probar punto como literal \. <br>";
                $patron='/a\.a/';
                echo preg_match($patron, "Maria a casa");
                echo preg_match($patron, "a.a");

                echo "<br>Probar expresiones literales como conjunto []<br>";
                $patron='/[abcd][xyz]/';
                echo preg_match($patron, "ax");
                echo preg_match($patron, "aa");
                echo preg_match($patron, "dz");
                echo preg_match($patron, "d z");

                echo "<br>| or Me vale noviembre en ingles y en español<br>";
                $patron='/Nov(iembre|ember)?/';
                echo preg_match($patron, "Nov");
                echo preg_match($patron, "Noviembre");
                echo preg_match($patron, "November");

                echo "<br>$ es el final del string<br>";
                $patron='/21$/';
                echo preg_match($patron, "10/12/2021");
                echo preg_match($patron, "21/12/2020");

                echo "<br>^ Es el principio del string Ej nº de Cuenta<br>";
                $patron='/^ES/';
                echo preg_match($patron, "56487 4 984 84 684");
                echo preg_match($patron, "ES535 2353 486 ");

                echo "<br>^ Sirve para decir que no contenga <br>";
                
                $patron='/log[^AS]/';
                echo preg_match($patron, "log");
                echo preg_match($patron, "loga");
                echo preg_match($patron, "logA");

                echo "<br>Etiqueta de cierre de html <br>";
                //+ puede coincidir una o mas veces
                //No esta funcionando en este momento
                $patron='/<\/([a-z]+[0-9]?)>/';
                $patron='/<\/[a-z]+[0-9]?>/i';
                //Puede tener mas de una letra pero al menos una
                //$patron='/<\/(.)+>/';
                echo preg_match($patron, "<h1>Tambien sirve para decir que no contenga</h1>
                <p>Tambien sirve para decir que no contenga</p>
                <i>Tambien sirve para decir que no contenga</i>");
                
                preg_match_all($patron, "<span>Tambien sirve para decir que no contenga</span>
                <p>Tambien sirve para decir que no contenga</p>
                <i>Tambien sirve para decir que no contenga</i>", $array);

                
                echo "<pre>";
                    foreach($array as $value)
                    {
                        $value=str_replace("<","&lt", $value);
                        print_r(str_replace(">","&gt", $value));
                    }
                echo"</pre>"; 
                
                //Comprobar que el IBAN es valido va a entrar en el examen
                echo "<br>^ Numero de cuenta valido<br>";
                $patron='/^ES[0-9]{2}\s[0-9]{4}\s[0-9]{4}\s[0-9]{2}\s[0-9]{10}/';
                echo preg_match($patron, "ES12 1234 1234 12 1234567890");
                echo preg_match($patron, "ES535 2353 486 ");

                echo "<br>Numeros validos del 0 al 999<br>";
                //^ Que obligatoriamente empiece por ese caracter y el $ que obligatoriamente termine por ese caracter
                $patron='/^[0-9]{1,3}$/';
                echo preg_match($patron, "");
                echo preg_match($patron, "9999");
                echo preg_match($patron, "99");

                //\d Cualquier numero \D cualquier letra
                $patron='/dD/';

                echo "<br>Minimo 3 caracteres en el nombre<br>";
                $patron='/^[A-Z]{1}[a-z]{2}/i';
                echo preg_match($patron, "david");

                echo "<br>Minimo 3 caracteres en el primer apellido y minimo 3 caracteres en el segundo<br>";
                $patron='/[A-Z]{3}\s[A-Z]{3}/i';
                echo preg_match($patron, "Vic Her");
                
                //dos digitos guion o barra dos digitos guion o barra cuatro digitos Y mayor de edad
                echo "<br>Probar la fecha<br>"; //[0-9]{2}(-|\/)[0-9]{4}
                $patron='/[0-9]{2}(-|\/)[0-9]{2}(-|\/)[0-9]{4}/';
                echo preg_match($patron, "01+01+2021"),"<br>";
                
                //echo date("d/m/Y",strtotime(date ('d-m-Y', time())."- 18 years"));

                

                echo "<br>Comprobar DNI con 8 dígitos y una letra<br>";
                $patron='/^[0-9]{8}[A-Z]{1}$/';
                echo preg_match($patron, "12345678B");

                echo "<br>Extrear numero DNI<br>";
                //echo substr("12345678F",0,8);
                $numero = (int)substr("12345678F",0,8);
                var_dump($numero);



                echo "<br>Comprobar correo <br>";
                $patron='/[a-z][0-9]+@[a-z]+\.[a-z]{2,}/';
                echo preg_match($patron, "da079@v.com");

                

                
            ?>
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