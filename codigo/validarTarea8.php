<?php
    require_once("./funcionesEj1-2.php");

    function validarFormulario()
    {
        $bandera;
        if(validarAlfabetico()==true && validarAlfanumerico()==true)
        {
            $bandera=true;
        }
        return $bandera;
    }

    function validarAlfabetico()
    {
        $bandera;
        if(!empty($_REQUEST['alfabetico'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p($_REQUEST['alfabetico']);      
        }
        return $bandera;
    }

    function validarAlfanumerico()
    {
        $bandera;
        if(!empty($_REQUEST['alfanumerico'])&& isset($_REQUEST['enviado']))
        {
            $bandera=true;  
            p($_REQUEST['alfanumerico']);      
        }
        return $bandera;
    }

    /*if(isset($_REQUEST['enviado']))
    {
        p("El formulario ha sido enviado");
        
        if(!empty($_REQUEST['alfabetico']))
        {
            p("El nombre es ". $_REQUEST['alfabetico']);
        }
    }*/

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
    

?>