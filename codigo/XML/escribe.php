<?php
    $XML= new DOMDocument("1.0", "utf-8");
    $XML->formatOutput =true;

    $ElementoRaiz=$XML->createElement("Deportes");

    $raiz=$xml->appendChild($ElementoRaiz);
    $XML->save("./ficheros/deportes.xml");

?>