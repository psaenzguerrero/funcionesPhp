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
            function corregir(&$palabra){
                $palabra[0] = strtoupper($palabra[0]);
                $largo = strlen($palabra);
                for ($i=1; $i <$largo ; $i++) { 
                    $palabra[$i]=strtolower($palabra[$i]);
                }
            }
            corregir($_POST["x"]);
            echo $_POST["x"];
        }
    ?>
</body>
</html>