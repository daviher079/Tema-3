<?php
    $xml= new DOMDocument("1.0", "utf-8");
    $xml->formatOutput =true;

    $ElementoRaiz=$xml->createElement("Deportes");

    $raiz=$xml->appendChild($ElementoRaiz);

    $deporte=$xml->createElement('Deporte');

    $ElementoRaiz->appendChild($deporte);

    $nombre=$xml->createElement("Nombre");
    $deporte->appendChild($nombre);
    $texto=$xml->createTextNode("Futbol");
    $nombre->appendChild($texto);

    $jugadores = $xml->createElement("Jugadores", "22");
    $deporte->appendChild($jugadores);

    $deporte=$xml->createElement('Deporte');

    $ElementoRaiz->appendChild($deporte);

    $nombre=$xml->createElement("Nombre");
    $deporte->appendChild($nombre);
    $texto=$xml->createTextNode("Tenis");
    $nombre->appendChild($texto);

    $jugadores = $xml->createElement("Jugadores", "2");
    $deporte->appendChild($jugadores);



    $xml->save("./ficheros/deportes.xml");

    


?>