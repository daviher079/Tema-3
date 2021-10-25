<?
    //Ejercicio 1
    function br()
    {
        echo"<br/>";
    }

    function h1($cadena)
    {
        echo "<h1>",$cadena,"</h1>";
    }

    function p($cadena)
    {
        echo "<p>",$cadena,"</p>";
    }

    function self()
    {
        return basename($_SERVER['SCRIPT_FILENAME']);
    }

    $letra=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');

    function letraDni($numero)
    {
        $letra=$numero%23;

        for ($i=0; $i <count($letra) ; $i++) { 
            
            if($letra==$i)
            {
                return $letra[$i];
            }
        }
    }

    

?>