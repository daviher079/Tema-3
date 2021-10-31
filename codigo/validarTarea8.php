<?php
    require_once("./funcionesEj1-2.php");

    function validarFormulario()
    {
        $bandera;
        if(validarAlfabetico()==true && validarAlfanumerico()==true && validarFecha()==true & validarOpcion()==true && validarDesplegable()==true && validarChecks()==true && validarpass()==true)
        {
            $bandera=true;
            validarAlfabeticoOpc();
            validarAlfanumericoOpc();
            validarFechaOpc();
            mostrarImagen();
        }
        return $bandera;
    }

    function recordarAlfabetico()
    {
        if(!empty($_REQUEST['alfabetico'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['alfabetico'];        
        }
    }

    function comprobarAlfabetico()
    {
        if(empty($_REQUEST['alfabetico'])&& isset($_REQUEST['enviado'])){
    
            label("Debe haber un campo alfabetico");
        }           
    }
    
    function validarAlfabetico()
    {
        $bandera;
        if(!empty($_REQUEST['alfabetico'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p("El campo alfabetico es: ".$_REQUEST['alfabetico']);      
        }
        return $bandera;
    }
    
    function recordarAlfabeticoOpc()
    {
        if(!empty($_REQUEST['alfabeticoOpcional'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['alfabeticoOpcional'];        
        }
    }


    function validarAlfabeticoOpc()
    {
        if(!empty($_REQUEST['alfabeticoOpcional'])&& isset($_REQUEST['enviado']))
        { 
            p("El campo alfabetico opcional es: ".$_REQUEST['alfabeticoOpcional']);      
        }else
        {
            p("El campo alfabetico opcional está vacio ");
        }
    }


    function recordarAlfanumerico()
    {
        if(!empty($_REQUEST['alfanumerico'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['alfanumerico'];        
        }
    }

    function comprobarAlfanumerico()
    {
        if(empty($_REQUEST['alfanumerico'])&& isset($_REQUEST['enviado']))
        {
            label("Debe haber un campo alfanumerico");
        }            
    }


    function validarAlfanumerico()
    {
        $bandera;
        if(!empty($_REQUEST['alfanumerico'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p("El campo alfanumerico es: ".$_REQUEST['alfanumerico']);      
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


    function recordarFecha()
    {
        if(!empty($_REQUEST['fecha'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['fecha'];        
        }
    }

    function comprobarFecha()
    {
        if(empty($_REQUEST['fecha'])&& isset($_REQUEST['enviado'])){
            
            label("Debe haber un campo fecha");
        }           
    }
    
    function validarFecha()
    {
        $bandera;
        if(!empty($_REQUEST['fecha'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p("El campo fecha es: ".$_REQUEST['fecha']);      
        }
        return $bandera;
    }

    function recordarFechaOpc()
    {
        if(!empty($_REQUEST['fechaOpcional'])&& isset($_REQUEST['enviado']))
        {
            echo $_REQUEST['fechaOpcional'];        
        }
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
        $bandera;
        if(!empty($_REQUEST['opcion']) && isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p("El campo opcion es: ".$_REQUEST['opcion']);      
        }
        return $bandera;
    }

    function comprobarOpcion()
    {
        if(!isset($_REQUEST['opcion']) && isset($_REQUEST['enviado']))
        {
            label("Debe haber una opcion marcada");
        }
    }
    
    function validarDesplegable()
    {
        $bandera;
        
        if(($_REQUEST['ciclo']=='dam'||$_REQUEST['ciclo']=='daw')&& isset($_REQUEST['enviado']))
        {
            $bandera=true; 
            p("El campo del desplegable es: ". $_REQUEST['ciclo']);    
        }

        return true;
    }

    function comprobarDesplegable()
    {
        if($_REQUEST['ciclo']=='no'&& isset($_REQUEST['enviado']))
        {
            label("Debe haber una opcion marcada en el desplegable");
        }
    }

    function comprobarChecks()
    {

        if(!isset($_REQUEST['aficiones']) && isset($_REQUEST['enviado']))
        {
            label("No ha marcado ningun check");
        }elseif(count($_REQUEST['checks'])>=3)
        {
            label("Debe elegir entre 1 y 3 opciones");
        }
    }

    function validarChecks()
    {
        $bandera;
        if(count($_REQUEST['checks'])>=3)
        {
            p($_REQUEST['aficiones']);
            $bandera=true;
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
        $bandera;
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

?>