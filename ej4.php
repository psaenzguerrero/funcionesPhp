<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="x">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
        if (isset($_POST["enviar"])) {
            function contar(&$palabra){
                $contador=0;
                $largo = strlen($palabra);
                for ($i=0; $i <$largo ; $i++) { 
                    
                    if (preg_match("'[A-Z]'", $palabra[$i])) {
                        $contador++;
                    }
                }
                return $contador;
            }
            contar($_POST["x"]);
            echo (contar($_POST["x"]));
        }
    ?>
</body>
</html>