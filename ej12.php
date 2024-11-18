<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if (isset($_POST["enviar"])) {
            
            function limpiar_chars( string $str, string $c, $lado=-1){
                if(strlen($c) == 1){
                    $check = "";
                    $ini = 0;
                    $fin = 0;
                    $l1 = 1;
    
                    if($lado == -1 || $lado == 0){
                        $check = "'^$c'";
                        $ini = 1;
                        $fin = strlen($str);
                    } 
                    else if ($lado == 1){
                        $check = "'$c$'";
                        $ini = 0;
                        $fin = strlen($str)-1;
                    } 
    
                    if(preg_match($check, $str))
                        return limpiar_chars(substr($str, $ini, $fin), $c, $lado);
                    else if($lado == 0)
                        return limpiar_chars($str, $c, $l1);
                    else
                        return $str;
    
                }
            }
    
            echo limpiar_chars($_POST["cad"], "_", 0);
        }else{
    ?> 
        <form action="#" method="post" enctype= "multipart/form-data">
            <label for="cad">Introduce una cadena de texto</label>
            <input type="text" name="cad">
            <br>
            <label for="char">Selecciona un caracter de la cadena</label>
            <input type="text" name="char">
            <br>
            <select name="desp" id="">
                <option value="iz">Izquierda</option>
                <option value="de">Derecha</option>
                <option value="am">Ambos</option>
            </select>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    <?php       
        }    
    ?>
</body>
</html>