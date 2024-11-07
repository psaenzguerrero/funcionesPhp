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
            $fechaActual=getdate()[0];
            $fechaSegundos = strtotime($_POST["x"]);
            $segundo = $fechaActual - $fechaSegundos;
            $dias = $segundo / (60 * 60 * 24);
            if ($dias > 0) {
                echo $dias;
            }else{
                echo $dias;
            }
        }else{
    ?>
            <form action="" method="post"enctype="multipart/form-data">
                <label for="#">Meta una fecha:</label>
                <input type="date" name="x">
                <input type="submit" name="enviar" value="Enviar">
            </form>
    <?php
        }
    ?>
</body>
</html>