<?php   

    echo "<h1>Modificando 2ª forma archivo <i>escribeXML.php</i></h1>";

    $rutaFichero = "./ficheros/deportes.xml";

    // Compruebo que existe

    if(file_exists($rutaFichero))
    {
        // Transforma el xml en un objeto de tipo simplexml

        $xml = simplexml_load_file($rutaFichero);

    }

    else
    {
        exit();
    }



    // Reogemos el objeto de tipo dom del xml
    //Modifica el objeto simpleXML a objeto DOM
    $dom = dom_import_simplexml($xml)->ownerDocument;
    $elemento = $dom->getElementsByTagName("Nombre");

    // Recorro cada elemento con la etiqueta <Deporte>

    foreach($elemento as $nombreDeporte)
    {
        if($nombreDeporte->nodeValue=="Tenis")
        {
            $aux = $nombreDeporte;
            do
            {
                $aux = $aux->nextSibling;
            }while($aux->nodeName != "Jugadores");

            $aux->nodeValue = 1;
            $aux->setAttribute("Modificado", "true");
        }
    }



    // Se guardan los cambios

    $dom->save($rutaFichero);

?>
