<?php

    function comprobarN(&$nombre){
        if(!preg_match("'[^a-zA-Z0-9\s]'", $nombre)){
            $nom = $nombre;
            $nom_con_guiones = str_replace(' ', '_', $nom);
            echo $nom_con_guiones;
            return $nom_con_guiones;
            
        }else{
            echo "nombre no valido";
        }
    }
    function comprobarT(&$archivo){
        $tamano = filesize($archivo);
        echo $tamaño;
        return $tamano;
    }
    function comprobarTipo(&$archivo){  
        $tipo = filetype($archivo);
        return $tipo;
    }
    function comprobarE(&$ruta){
        if (!file_exists($ruta)) {
            mkdir($ruta);
            echo "<br>";
            echo "Carpeta creada y seleccionada";
            echo "<br>";
            echo $ruta;
            echo "<br>";

            
        }else{
            echo "<br>";
            echo "Carpeta seleccionada:";
            echo "<br>";
            echo $ruta;
            echo "<br>";

        }
    }
    function guardarA(&$ruta, $nombre){

        $archivo = $_FILES["a1"]["name"];
        $origen = $_FILES["a1"]["tmp_name"];
        

        $fin = $archivo;
        $exp = explode(".",$fin);
        $cola = end($exp);
        $fecha= date("d-m-Y");
        $prin = comprobarN($nombre);

        $destino = $ruta.'\\'.$prin.$fecha.$cola;

        move_uploaded_file($origen, $destino);
    }



?>