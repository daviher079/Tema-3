<?php
    require_once("./funcionesEj1-2.php");
    //Definicion de las constantes que contienen los patrones que comprueban si la cadena es correcta
    define("PATRONNOMBRE", '/^[A-Z]{1}[a-z]{2}/i');
    define("PATRONAPELLIDOS", '/[A-Z]{3}\s[A-Z]{3}/i');
    define("PATRONFECHA", '/[0-9]{2}(-|\/)[0-9]{2}(-|\/)[0-9]{4}/');
    define("PATRONDNI", '/^[0-9]{8}[A-Z]{1}$/');
    define("PATRONCORREO", '/[a-z0-9]+@[a-z0-9]+\.[a-z0-9]{2,}/');
    /*
        En esta constante lo primero que se crea es la fecha actual y se le da el formato 
        dd-mm-yyyy despues esto se mete dentro de strtotime y se concatena - 18 years para 
        que devuelva en milisegundos la fecha actual pero de hace 18 años esto se mete dentro 
        de date los milisegundos devueltos para formatear la fecha con el formato que nos interesa
    */
    define("LAST18YEARS", strtotime(date ('d-m-Y', time())."- 18 years")); 
    define("LETRASDNI",23);
    
    /*
        Comprueba que todos los campos sean correctos antes de mostrar la información recogida en 
        los inputs sino devuelve false 
    */
    function validarFormulario(){
        $bandera=true;
        if(isset($_REQUEST['enviado']))
        {
            
            
            if(validarNombre()==true && validarApellidos()==true && validarFecha()==true && validarDNI()==true && validarCorreo()==true)
            {
                p("Has puesto todo correcto");
            }   
            else{
                
                $bandera = false;
            }     
        } else
        {
            $bandera= false;
        }
        
        return $bandera;
    }

    /*
        Comprueba que el campo no este vacio y se haya enviado algo en el formulario
        Se añade la funcion dentro del campo value en el apartado de html
    */

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

    /*
        A esta funcion se le pasa un patrón y la cadena que tiene que validar se ejecuta dos veces
        en el codigo una cada vez que se valida un campo y otra en cada input para informar al usuario 
        de las caracteristicas que debe cumplir ese campo 
    */

    function expresionGenerico($patron, $var){
        
        $bandera=true;

        if(!empty($var) && isset($_REQUEST['enviado']) && preg_match($patron, $var)==false)
        {
            $bandera=false;
        }

        return $bandera;
    }

    /*
        Comprueba si el formulario ha sido enviado, si el input nombre ha sido envidado y si cumple 
        las caracteristicas de la expresion regular 
    */
    
    function validarNombre()
    {
        
        $bandera=true;
        if(!empty($_REQUEST['nombre']) && isset($_REQUEST['enviado']) && expresionGenerico(PATRONNOMBRE, $_REQUEST['nombre'])==true)
        {
            $bandera=true;    
        }
        else
        {
            $bandera=false;
        }
        return $bandera;
    }

    /*
        Comprueba si el formulario ha sido enviado, si el input apellido ha sido envidado y si cumple 
        las caracteristicas de la expresion regular 
    */

    function validarApellidos()
    {
        $bandera=true;
        
        if(!empty($_REQUEST['apellidos']) && isset($_REQUEST['enviado']) && expresionGenerico(PATRONAPELLIDOS, $_REQUEST['apellidos'])==true)
        {
            $bandera=true;    
        }
        else
        {
            $bandera=false;
        }
        return $bandera;
    }

    /*
        Comprueba si el formulario ha sido enviado, si el input fecha ha sido envidado y si cumple 
        las caracteristicas de la expresion regular 
    */

    function validarFecha()
    {
        $bandera=true;
        
        if(!empty($_REQUEST['fecha']) && isset($_REQUEST['enviado']) && expresionGenerico(PATRONFECHA, $_REQUEST['fecha'])==true)
        {
            $bandera=true;    
        }
        else
        {
            $bandera=false;
        }
        return $bandera;
    }

    /*
        Lo primero que se hace es comprobar la fecha que esté introducida en el formato correcto
        si esta en el formato correcto 
    */

    function calcularEdad()
    {
        $bandera=false;
        if(expresionGenerico(PATRONFECHA, $_REQUEST['fecha'])==false)
        {
            $bandera=false;
        }
        else
        {
            
            $menorDeEdad =  LAST18YEARS;
            
            $fechaIntroducida = strtotime($_REQUEST['fecha']);
            
            if($fechaIntroducida>=$menorDeEdad)
            {
                $bandera=true;
            }
            
        }
        
        return $bandera;
    }

    /*
        Comprueba si el formulario ha sido enviado, si el input dni ha sido envidado y si cumple 
        las caracteristicas de la expresion regular 
    */

    function validarDNI()
    {
        $bandera=true;
        
        if(!empty($_REQUEST['dni']) && isset($_REQUEST['enviado']) && expresionGenerico(PATRONDNI, $_REQUEST['dni'])==true)
        {
            $bandera=true;    
        }
        else
        {
            $bandera=false;
        }
        return $bandera;
    }

    /*
       Se comprueba que la cadena se haya introducido correctamente con la expresion regular 
       si esta correcta se hace un substring del DNI introducido y se hace un casting para 
       guardar la parte numerica en una variable y se guarda en otra variable la letra
       se calcula el resto para saber que valor hay que pasarle al array donde están contenidas las 
       letras que se utilizan en los DNI si la letra introducida por el usuario es la misma que la que
       está contenida en la posición del array entonces devuelve true
    */

    function calculardni($cadena)
    {
        $bandera=false;

        if(expresionGenerico(PATRONDNI, $_REQUEST['dni'])==false)
        {
            $bandera=false;
        }else
        {
            $letras=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        
            $miNumero = (int)substr($cadena,0,8);
            $miLetra = substr($_REQUEST['dni'], -1);
            $resultado= $miNumero % LETRASDNI;
        
            if($letras[$resultado]==$miLetra)
            {
                $bandera=true;
            }
        }
        
        return $bandera;
    }


    /*
        Comprueba si el formulario ha sido enviado, si el input dni ha sido envidado y si cumple 
        las caracteristicas de la expresion regular 
    */

    function validarCorreo()
    {
        $bandera=true;
        if(!empty($_REQUEST['correo']) && isset($_REQUEST['enviado']) && expresionGenerico(PATRONCORREO, $_REQUEST['correo'])==true)
        {
            
            $bandera=true;    
        }
        else
        {
            
            $bandera=false;
        }

        return $bandera;
    }


   

?>