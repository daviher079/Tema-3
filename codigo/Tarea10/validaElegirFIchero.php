<?php
require_once("../funcionesEj1-2.php");
    function recordarGenerico($var){
        if(!empty($_REQUEST[$var])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST[$var];        
        }
    }

    /*
        Se ejecuta cuando el input esta vacio para avisar al usuario que ese campo debe rellenarlo 
    */
    
    function comprobarGenerico($var){
        if(empty($_REQUEST[$var]) && isset($_REQUEST['enviado'])){
            
            label("Debe haber un campo ".$var);
        }           
    }

    function comprobarFicheroExistente($fichero)
    {
<<<<<<< HEAD
        $rutaFichero="./directorioFicheros".$fichero;
        if(file_exists($rutaFichero)==false)
        {
            p("El fichero no existe, primero debe crearlo");
        }
=======
        $bandera=true;
        $rutaFichero="./directorioFicheros".$fichero;

        if(file_exists($rutaFichero)==false )

        {
            $bandera=false;
        }
        return $bandera;
>>>>>>> a62b35ae3b01b19643befb2c6b2a953049a62be7
    }

?>