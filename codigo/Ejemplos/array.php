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
    <div>
        <?php
            $arrayvacio=array();
            var_dump($arrayvacio);
            echo"<br/>";
            $array10=array(10);
            var_dump($array10);

            $notas=array(8,9,6,'diez',7,4);
            echo"<br/>";

            echo "<pre>";
                print_r ($notas);
            echo "</pre>";    

            echo"<br/>";

            echo "<p>";
            for ($i=0; $i < count($notas) ; $i++) { 
                echo $notas[$i]." ";
            }
            echo "</p>";

            $notas[10]="MH";

            echo"<br/>";

            echo "<pre>";
                print_r ($notas);
            echo "</pre>";

            echo"<br/>";

            echo "<p>".count($notas)."</p>";
            echo"<br/>";

            //Da error
            /*for ($i=0; $i < sizeof($notas); $i++) { 
                echo"<p>". $notas[$i]."</p>";
            }*/
            echo"<p>";
            foreach($notas as $nota)
            {
                echo $nota. " ";
            }
            echo "</p>";
            echo"<br/>";

            if(isset($notas[6]))
                echo "<p>existe</p>";
            else
                echo"<p>No existe</p>";    

                echo"<br/>";
                unset($notas[1]);
                echo"<p>";

                foreach($notas as $nota)
                {
                    echo $nota." ";
                }    
                echo "</p>";
                
                $notasArrayAsociativo=array(
                    'David'=>8,
                    'Ismael'=>9,
                    'Uriel'=>6,
                    'Ivan'=>10,
                    'Aarón'=>7,
                    'Hector'=>4
                );
                echo"<br/>";
                echo "<pre>";
                    print_r($notasArrayAsociativo);
                echo"</pre>";

                foreach($notasArrayAsociativo as $key => $value)
                {
                    $notasArrayAsociativo[$key]+=1;
                }
                echo"<br/>";
                echo "<pre>";
                    print_r($notasArrayAsociativo);
                echo"</pre>";

                //Multidimensionales [][]

                $tabla=array();

                for ($i=0; $i <=10 ; $i++) { 
                    $tabla[$i]=array();
                    for ($j=0; $j <=10 ; $j++) { 
                        $tabla[$i][$j]=$i*$j;
                    }                  
                }
                echo"<br/>";

                echo "<pre>";
                    print_r($tabla);
                echo"</pre>";

                $ciclos=array(

                    "DAW" => array("PR"=>"Programación",
                        "BD" => "Bases de datos",
                        "DWES" => "Desarrollo web en entorno servidor"),
                    "DAM" => array ("PR"=>"Programación",
                        "BD" => "Bases de datos",
                        "PMDM" => "Programación multimedia y de dispositivos móviles"),
                    "ASIR" => array ("ASO"=>"Sistemas Operativos",
                        "BD" => "Bases de datos",
                        "PLAR" => "Redes"),    
                );

                foreach ($ciclos as $key => $value) {
                    
                    foreach ($ciclos[$key] as $clave => $valor2) {
                        echo "<p>".$valor2."</p>";
                    }
                }
            echo "<h1>Funciones para recordar</h1>";
                echo "<p>";
                print_r (current($ciclos));
                echo "</p>";
                echo "<br/>";
                echo "<p>";
                print_r (next($ciclos));
                echo "</p>";
                echo "<br>";
                echo "<p>";
                print_r (next($ciclos));
                echo "</p>";
                echo "<br>";
                echo "<br>";

                //LA FUNCION EACH ESTA OBSOLETA
            /*while($ciclo = each($ciclos))
            {
                echo "<pre>";
                echo "El ciclo es ", $ciclo['key'], " Y la asignatura es ";
                print_r($ciclo['value']);
                echo "</pre>";
            }    

            echo "<br>";
                print_r (current($ciclos));

                echo "<br>";
                reset($ciclos);    

            while($ciclo = each($ciclos))
            {
                echo "<pre>";
                echo "El ciclo es ", $ciclo['key'], " Y la asignatura es ";
                print_r($ciclo['value']);
                echo "</pre>";
            }   */   
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