<?
    function saludo(){
        echo "Hola";
    }

    function saludoNombre($nombre){
        echo "Hola ", $nombre;
    }


    //Predefinida
    function precioConIVA($precio, $iva=0.21)
    {
        echo "El precio final del producto es ". ($precio*(1+$iva));
    }

    //Return

    function precioConIVADevuelve($precio, $iva=0.21)
    {
        return $precio*(1+$iva);
    }

    function precio_a_precioIVA(&$precio, $iva=0.21)
    {
        $precio =$precio*(1+$iva);
    }

    function addValor(&$array)
    {
        $index=count($array);
        $array[$index]=$index;
    }

    function agrandar($miFigura)
    {
        $miFigura->lado++;
        
    }

    
?>
