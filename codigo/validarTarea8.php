<?php
    require_once("./funcionesEj1-2.php");

    function validarFormulario()
    {
        
        $bandera=true;
        if(isset($_REQUEST['enviado']))
        {
            if(validarAlfabetico()==true && validarAlfanumerico()==true && validarFecha()==true && validarOpcion()==true/* && validarDesplegable()==true && validarChecks()==true && validarpass()==true*/)
            {
                
                
                
                //mostrarImagen();
            }   
            else{
                $bandera= false;
            }     
        } else{
            $bandera= false;
        }
        
        return $bandera;
    }

    
    function comprobarGenerico($var)
    {
        if(empty($_REQUEST[$var]) && isset($_REQUEST['enviado'])){
            
            label("Debe haber un campo ".$var);
        }           
    }
    
    function recordarGenerico($var)
    {
        if(!empty($_REQUEST[$var])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST[$var];        
        }
    }

    function validarAlfabetico()
    {
        $bandera=true;
        if(!empty($_REQUEST['alfabetico']) && isset($_REQUEST['enviado']))
        {
            $bandera=true;  
                 
        }else
        {
            $bandera=false;
        }
        return $bandera;
    }

    function validarAlfabeticoOpc()
    {
        if(!empty($_REQUEST['alfabeticoOpcional']) && isset($_REQUEST['enviado']))
        { 
            p("El campo alfabetico opcional es: ".$_REQUEST['alfabeticoOpcional']);      
        }else
        {
            p("El campo alfabetico opcional está vacio ");
        }
    }

    function validarAlfanumerico()
    {
        $bandera=true;
        if(!empty($_REQUEST['alfanumerico'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;   
        }
        else
        {
            $bandera=false;
        }
        return $bandera;
    }
    

    function recordarAlfanumericoOpc()
    {
        if(!empty($_REQUEST['alfanumericolOpcional'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['alfanumericolOpcional'];        
        }
    }


    function validarAlfanumericoOpc()
    {
        if(!empty($_REQUEST['alfanumericolOpcional'])&& isset($_REQUEST['enviado']))
        { 
            p("El campo alfanumerico opcional es: ".$_REQUEST['alfanumericolOpcional']);      
        }else
        {
            p("El campo alfanumerico opcional está vacio ");
        }
    }
    
    function validarFecha()
    {
        $bandera=true;
        if(!empty($_REQUEST['fecha'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
                  
        }else
        {
            $bandera=false;
        }
        return $bandera;
    }
    
    function validarFechaOpc()
    {
        if(!empty($_REQUEST['fechaOpcional'])&& isset($_REQUEST['enviado']))
        { 
            p("El campo fecha opcional es: ".$_REQUEST['fechaOpcional']);      
        }else
        {
            p("El campo fecha opcional está vacio ");
        }
    }
    
    function validarOpcion()
    {
        $bandera=true;
        if(!empty($_REQUEST['opcion']) && isset($_REQUEST['enviado']))
        {
            $bandera=true;  
                  
        }else
        {
            $bandera=false;
        }
        return $bandera;
    }

    
/*
    

    
    function validarDesplegable()
    {
        $bandera=true;
        
        if(($_REQUEST['ciclo']=='dam'||$_REQUEST['ciclo']=='daw') && isset($_REQUEST['enviado']))
        {
            $bandera=true; 
            p("El campo del desplegable es: ". $_REQUEST['ciclo']);    
        }

        return $bandera;
    }

    function comprobarDesplegable()
    {
        if(!empty($_REQUEST['ciclo'])&& isset($_REQUEST['enviado']))
        {
            if($_REQUEST['ciclo']=='no')
            {
                label("Debe haber una opcion marcada en el desplegable");
            }
            
        }
    }

    function comprobarChecks()
    {

        if(empty($_REQUEST['checks']) && isset($_REQUEST['enviado']))
        {
            if(count($_REQUEST['checks'])>=3)
            {
                label("Debe elegir entre 1 y 3 opciones");
            }elseif(count($_REQUEST['checks'])==0)
            {
                label("No ha marcado ningun check");
            }
                
        }
    }

    function validarChecks()
    {
        $bandera=true;
        if(empty($_REQUEST['checks']) && isset($_REQUEST['enviado']))
        {
            if(count($_REQUEST['checks'])<=3 && count($_REQUEST['checks'])>=1)
            {
                p($_REQUEST['checks']);
                $bandera=true;
            }

        }

        return $bandera;
    }

    if(!empty($_REQUEST['pass']))
    {
        p("La contraseña es ". $_REQUEST['pass']);
    }

    function recordarPass()
    {
        if(!empty($_REQUEST['pass'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['pass'];        
        }
    }

    function comprobarPass()
    {
        if(empty($_REQUEST['pass'])&& isset($_REQUEST['enviado'])){
    
            label("Debe haber un campo password");
        }           
    }
    
    function validarpass()
    {
        $bandera=true;
        if(!empty($_REQUEST['pass'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p("El campo password es: ".$_REQUEST['pass']);      
        }
        return $bandera;
    }

    function mostrarImagen()
    {
        if(isset($_FILES))
        {
            $guarda="../upload/";
            $rutaConNombre=$guarda.$_FILES['fichero']['name'];
            

            $rutaimagen=$guarda.$_FILES['fichero']['name'];
            
            if(move_uploaded_file($_FILES['fichero']['tmp_name'], $rutaimagen))
            {
                echo "<img src='".$rutaimagen."'>";       
            }else
            {
                p("Error");
            }
        }
    }
*/
?>