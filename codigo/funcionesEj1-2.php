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
        echo "<p style=' font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 16px'>",$cadena,"</p>";
    }

    function self()
    {
        return basename($_SERVER['SCRIPT_FILENAME']);
    }

    function label($cadena)
    {
        echo "<label style='color:red; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>".$cadena."</label>";
    }

    function inputNumber($valor)
    {
        echo "<input type='number' id='".$valor."' name='".$valor."' value='".$valor."' min='0' max='10'>";
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
        
        if($repeticion==true)
        {
            
            for ($i=0; $i < $nGenerados ; $i++) 
            { 
                $numero=rand($min, $max);
                if(array_search($numero, $array)==false)
                {
                    
                    $array[$i]=$numero;
                }else
                {
                    $array[array_search($numero, $array)]=$numero;
                }

                
                
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