<?php
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

    function label($cadena)
    {
        echo "<label for='nombre' style='color:red;'>".$cadena."</label>";
    }
    
    function letraDni($numero)
    {
        $letra=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        $resultado=$numero%23;
         for ($i=0; $i <count($letra) ; $i++) { 
            
             if($resultado==$i)
             {
                 return $letra[$i];
             }
        }
    }

    function generaNumeros(&$array, $min, $max,$nGenerados, $repeticion)
    {
        $prueba=0;
        if($repeticion==true)
        {
            
            for ($i=0; $i < $nGenerados ; $i++) 
            { 
                $numero=rand($min, $max);
                
                /*do{
                    $array[$i]=$numero;
                }while(array_search($numero, $array)==false);
                */
            }

            
        }
            
        
        else
        {
            for ($i=0; $i < $nGenerados ; $i++) 
            { 
                array_push($array, rand($min, $max));
                
            }
            
        }
        
        return $array;
    }


    

    

?>