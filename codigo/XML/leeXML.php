<?php
    $rutaFichero="./ficheros/ficheroXML.xml";
    if(file_exists($rutaFichero))
    {
        $xml = simplexml_load_file($rutaFichero);
        echo "<pre>";
            print_r($xml);
        echo "</pre>";  
        
        foreach ($xml as $departamento)
        {
            echo "Codigo: ".$departamento->children()[0]."<br>";
            echo "Departamento: ".$departamento->children()[1]."<br><br>";

            foreach ($departamento->children()[2] as $profesor) {
               var_dump($profesor); 
               echo $profesor->attributes()[1]. "<br>";
            }

        }
    }else
    {
        exit;
    }
?>
