<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <label for="3">escribe frase</label>
        <input type="text" name="x">
        <label for="#">escribe letra</label>
        <input type="text" name="y">
        <label for="#">escribe casse sentive</label>
        <input type="text" name="z">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    $si = "si";
        if (isset($_POST["enviar"])) {
            if ($_POST["z"]!=$si) {
                function contar2(&$palabra){
                    $contador=0;
                    $largo = strlen($palabra);
                    for ($i=0; $i <$largo ; $i++) { 
                        $palabra[$i]=strtolower($palabra[$i]);
                        if ($palabra[$i]==$_POST["y"]) {
                            $contador++;
                        }
                    }
                    return $contador;
                }
            }else{
                function contar2(&$palabra){
                    $contador=0;
                    $largo = strlen($palabra);
                    for ($i=0; $i <$largo ; $i++) { 
                        if ($palabra[$i]==$_POST["y"]) {
                            $contador++;
                        }
                    }
                    return $contador;
                }
                
            }
            contar2($_POST["x"]);
            echo (contar2($_POST["x"]));
        }
    ?>
</body>
</html>