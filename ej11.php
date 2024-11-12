<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "ej11-2.php";
        if (isset($_POST["enviar"])) {
            echo $_POST["n1"];
            comprobarN($_POST["n1"]);
            $n = comprobarN($_POST["n1"]);
            $ruta = "C:\Users\EAG\Desktop\\$n";
            comprobarE($ruta);
            guardarA($ruta, $n);


        }else{
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="#">Escribe tu nombre aqui:</label>
        <input type="text" name="n1">
        <br>
        <label for="#">Selecciona tu archivo aqui:</label>
        <input type="file" name="a1">
        <br>
        <label for="#">Selecciona tu archivo aqui:</label>
        <input type="file" name="a2">
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php        
        }
    ?>
    
</body>
</html>