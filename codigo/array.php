<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <?
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

            for ($i=0; $i < count($notas) ; $i++) { 
                echo"<p>". $notas[$i]."</p>";
            }

            $notas[10]="MH";

            echo"<br/>";

            echo "<pre>";
                print_r ($notas);
            echo "</pre>";

            echo count($notas);

            //Da error
            for ($i=0; $i < count($notas) ; $i++) { 
                echo"<p>". $notas[$i]."</p>";
            }

            foreach($notas as $nota)
            {
                echo"<p>".$nota."</p>";
            }

            if(isset($notas[6]))
                echo "existe";
            else
                echo"No existe";    

            
                unset($notas[1]);

                foreach($notas as $nota)
                {
                    echo"<p>".$nota."</p>";
                }    
            
                
                $notasArrayAsociativo=array(
                    'David'=>8,
                    'Ismael'=>9,
                    'Uriel'=>6,
                    'Ivan'=>10,
                    'Aarón'=>7,
                    'Hector'=>4
                );

                echo "<pre>";
                    print_r($notasArrayAsociativo);
                echo"</pre>";

                foreach($notasArrayAsociativo as $key => $value)
                {
                    $notasArrayAsociativo[$key]+=1;
                }

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
                );

                foreach ($ciclos as $key => $value) {
                    
                    foreach ($ciclos[$key] as $clave => $valor2) {
                        echo $valor2;
                    }
                }

        ?>
    </main>
</body>
</html>