<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" name="x">
            <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    
    if (isset($_POST["enviar"])) {
        
        function coorregir_primera_letra(&$palabra){
            if (preg_match("'^[a-z]'",$palabra)) {
                $palabra[0] = strtoupper($palabra[0]);

            }
        }
        coorregir_primera_letra($_POST["x"]);
        echo $_POST["x"];
    }
    ?>
    
</body>
</html>