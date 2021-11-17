<?php

    echo "<h1>Modificando archivo <i>escribeXML.php</i></h1>";

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
    $dom = dom_import_simplexml($xml)->ownerDocument;

    // Recojo el primer hijo (Deportes)
    $deportes = $dom->firstChild;

    // Recorro el xml
    foreach($deportes->childNodes as $deporte)
    {

        // Si recojo un deporte (y no un espacio)

        if($deporte->nodeName == "Deporte")
        {
            // Por cada hijo
            foreach($deporte->childNodes as $hijos)
            {
                // Si el hijo es 'Nombre'
                if($hijos->nodeName == "Nombre")
                {
                    // Si el valor de Nombre es 'Tenis'
                    if($hijos->nodeValue == "Tenis")
                    {
                        $aux = $hijos;
                        do
                        {
                            $aux = $aux->nextSibling;
                        }while($aux->nodeName != "Jugadores");

                        $aux->nodeValue = 2;
                        // modifico el valor del nodo
                    }
                }
            }
        }
    }

    // Se guardan los cambios
    $dom->save($rutaFichero);

?>
